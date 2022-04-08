<?php

namespace App\Service;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\KernelInterface;


class LockupsConverter
{
    private $doctrine;
    private $appKernel;
    private $projectRoot;
    private $saveDirectory;

    public function __construct(ManagerRegistry $doctrine, KernelInterface $appKernel)
    {
        $this->doctrine = $doctrine;
        $this->appKernel = $appKernel;
        $this->projectRoot = $this->appKernel->getProjectDir();
        $this->saveDirectory = realpath($this->projectRoot . "/public/lockups/");
    }

    private function createFolder(string $folderName): string
    {
        if (!file_exists($folderName)) {
            mkdir($folderName, 0777, true);
        }
        return $folderName;
    }

    public function saveSvg(string $SVG, string $fileName, string $orient, bool $rev = false, string $color = "RGB"): bool
    {
        $svgPath = $this->createFolder($this->saveDirectory . "/" . $fileName . "lockups" . '/') . $orient . $fileName . $color . '.svg';
        $myfile = fopen($svgPath, "w") or die("Internal error");
        fwrite($myfile, $SVG);
        fclose($myfile);
        $this->convertAll($svgPath, $fileName, $orient, $rev, $color);
        unlink($svgPath);
        return true;
    }

    public function convertAll(string $SvgPath, string $newFileName, string $orient, bool $rev = false, string $color = "RGB"): bool
    {
        $pathName = "";
        $backupFileName = $newFileName;
        if ($orient == "h") {
            $pathName = $pathName . "Nh_" . $newFileName . "/";
            $newFileName = "Nh_" . $newFileName;
        } else {
            $pathName = $pathName . "Nv_" . $newFileName . "/";
            $newFileName = "Nv_" . $newFileName;
        }
        switch ($color) {
            case "RGB":
                $pathName = $pathName . "/" . "RGB (HEX)/";
                $newFileName = $newFileName . "RGB";
                break;
            case "pms186cp":
                $pathName = $pathName . "/" . "PMS186cp/";
                $newFileName = $newFileName . "pms186cp";
                break;
            case "4c":
                $pathName = $pathName . "/" . "4c CMYK/";
                $newFileName = $newFileName . "4c";
                break;
            case "blk":
                $newFileName = $newFileName . "blk";
                if ($rev) {
                    $pathName = $pathName . "/" . "Rev/";
                } else {
                    $pathName = $pathName . "/" . "Black/";
                }
                break;
        }
        $pathName = $this->saveDirectory . "/" . $backupFileName . "lockups" . "/" . $pathName;
        $this->createFolder($pathName);
        if ($rev == true) {
            $newFileName = $newFileName . "_rev";
        }
        $svgFileName = $pathName . $newFileName . ".svg";
        $pngFileName = $pathName . $newFileName . ".png";
        $jpgFileName = $pathName . $newFileName . ".jpg";
        $epsFileName = $pathName . $newFileName . ".eps";
        $aiFileName = $pathName . $newFileName . ".ai";
        $pdfFileName = $pathName . $newFileName . ".pdf";


        #for svg
        exec('inkscape --export-type="svg" --export-plain-svg --export-area-snap "' . $SvgPath . '" -o "' . $svgFileName . '"' . ' 2>&1', $backend_output, $return_var);


        #for png

        exec('inkscape --export-type="png" --export-area-snap -h 800 "' . $SvgPath . '" -o "' . $pngFileName . '"' . ' 2>&1', $backend_output, $return_var);

        #for jpg | convert is a imagemagick function
        $bg = $rev ? '-background "#000000" -flatten ' : '-background "#ffffff" -flatten ';
        exec('convert "' . $pngFileName . '" ' . $bg . ' "' . $jpgFileName . '" 2>&1', $backend_output, $return_var);

        #for eps
        exec('inkscape --export-type="eps" --export-area-snap --export-area-drawing "' . $SvgPath . '" -o "' . $epsFileName . '"' . ' 2>&1', $backend_output, $return_var);

        # POSSIBLE FIX: replace the rgb colors in teh cairo commands with cmyk here (for both 4c and Pantone?)
        if ($color == '4c' || $color == 'pms186cp') {
            $file = fopen($epsFileName, 'r');
            $data = fread($file, filesize($epsFileName));
            $data = str_replace('setrgbcolor', 'setcmykcolor', $data); # changes the rg cairo command to setcmykcolor
            $data = str_replace('0.0705882 0.603922 0.388235 rg', '0.83 0.15 0.80 0.02 rg', $data); # replaces green of 4H
            $data = str_replace('0.854902 0.101961 0.196078 rg', '0.02 1 0.85 0.06 rg', $data); # replaces scarlet red
            fclose($file);

            $file = fopen($epsFileName, 'w');
            fwrite($file, $data);
            fclose($file);
        }

        #for .ai
        copy($epsFileName, $aiFileName);

        #for pdf
        $options = '';
        if ($color == '4c') {
            $options = '-dProcessColorModel=/DeviceCMYK ';
        }
        exec('ps2pdf ' . $options . ' "' . $epsFileName . '" "' . $pdfFileName . '" 2>&1', $backend_output, $return_var);

        return true;
    }
}
