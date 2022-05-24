<?php

namespace App\Service;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\KernelInterface;
use App\Entity\Lockups;
use App\Entity\LockupFiles;
use ZipArchive;


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

    public function deteleFolder(string $fileName) {
        $deleteFolder = $this->saveDirectory . "/" . $fileName . "lockups";
        exec('rm -rf ' . $deleteFolder);
    }

    public function createZip(int $id, string $fileName) {
        $lockup = $this->doctrine->getRepository(Lockups::class)->find($id);
        $lockupFiles = $this->doctrine->getRepository(LockupFiles::class)->findBy(['lockup' => $lockup->getId()]);

        $zippathName = $this->saveDirectory . "/" . $fileName . "lockups" . "/" . $fileName . "lockups.zip";

        $zipDownloadUrl = "/lockups" . "/" . $fileName . "lockups" . "/" . $fileName . "lockups.zip";

        $zip = new ZipArchive;
        if ($zip->open($zippathName, ZipArchive::CREATE) === TRUE)
            {
            // Add files to the zip file
            foreach ($lockupFiles as $item) {
                $zip->addFile($item->getDirectory(), $item->getPathName());
            }
            $zip->addFile($this->projectRoot . "/public/lockups/horiz_convert_pantone.jsx", "horiz_convert_pantone.jsx");
            $zip->addFile($this->projectRoot . "/public/lockups/vert_convert_pantone.jsx", "vert_convert_pantone.jsx");
            // All files are added, so close the zip file.
            $zip->close();
        }
        $lockup->setZipUrl($zipDownloadUrl);
        $this->doctrine->getManager()->persist($lockup);
        $this->doctrine->getManager()->flush();
    }

    public function saveSvg(Lockups $lockups, string $SVG, string $fileName, string $orient, bool $rev = false, string $color = "RGB"): bool
    {
        $svgPath = $this->createFolder($this->saveDirectory . "/" . $fileName . "lockups" . '/') . $orient . $fileName . $color . '.svg';
        $myfile = fopen($svgPath, "w") or die("Internal error");
        fwrite($myfile, $SVG);
        fclose($myfile);
        $this->convertAll($lockups, $svgPath, $fileName, $orient, $rev, $color);
        unlink($svgPath);
        return true;
    }

    public function convertAll(Lockups $lockups, string $SvgPath, string $newFileName, string $orient, bool $rev = false, string $color = "RGB"): bool
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
                $pathName = $pathName . "RGB (HEX)/";
                $newFileName = $newFileName . "RGB";
                break;
            case "pms186cp":
                $pathName = $pathName  . "PMS186cp/";
                $newFileName = $newFileName . "pms186cp";
                break;
            case "4c":
                $pathName = $pathName . "4c CMYK/";
                $newFileName = $newFileName . "4c";
                break;
            case "blk":
                $newFileName = $newFileName . "blk";
                if ($rev) {
                    $pathName = $pathName . "Rev/";
                } else {
                    $pathName = $pathName . "/" . "Black/";
                }
                break;
        }
        $backupPathName = $pathName;
        $pathName = $this->saveDirectory . "/" . $backupFileName . "lockups" . "/" . $pathName;
        $this->createFolder($pathName);
        if ($rev == true) {
            $newFileName = $newFileName . "_rev";
        }
        $urlName = "/lockups" . "/" . $backupFileName . "lockups" . "/" . $backupPathName;

        $svgFileName = $pathName . $newFileName . ".svg";
        $svgUrlName = $urlName . $newFileName . ".svg";
        $svgPathName = $backupPathName . $newFileName . ".svg";

        $pngFileName = $pathName . $newFileName . ".png";
        $pngUrlName = $urlName . $newFileName . ".png";
        $pngPathName = $backupPathName . $newFileName . ".png";

        $jpgFileName = $pathName . $newFileName . ".jpg";
        $jpgPathName = $backupPathName . $newFileName . ".jpg";
        $jpgUrlName = $urlName . $newFileName . ".jpg";

        $epsFileName = $pathName . $newFileName . ".eps";
        $epsPathName = $backupPathName . $newFileName . ".eps";
        $epsUrlName = $urlName . $newFileName . ".eps";

        $aiFileName = $pathName . $newFileName . ".ai";
        $aiPathName = $backupPathName . $newFileName . ".ai";
        $aiUrlName = $urlName . $newFileName . ".ai";

        $pdfFileName = $pathName . $newFileName . ".pdf";
        $pdfPathName = $backupPathName . $newFileName . ".pdf";
        $pdfUrlName = $urlName . $newFileName . ".pdf";


        $lockupFileClass = [];

        #for svg
        exec('inkscape --export-type="svg" --export-plain-svg --export-area-snap "' . $SvgPath . '" -o "' . $svgFileName . '"' . ' 2>&1', $backend_output, $return_var);

        $lockupFileClass[0] = new LockupFiles();
        $lockupFileClass[0]->setFileName($newFileName . ".svg");
        $lockupFileClass[0]->setFormat("svg");
        $lockupFileClass[0]->setLockup($lockups);
        $lockupFileClass[0]->setOrient($orient);
        $lockupFileClass[0]->setStyle($color);
        $lockupFileClass[0]->setTemplate($lockups->getTemplate());
        $lockupFileClass[0]->setUrl($svgUrlName);
        $lockupFileClass[0]->setDirectory($svgFileName);
        $lockupFileClass[0]->setPathName($svgPathName);
        $this->doctrine->getManager()->persist($lockupFileClass[0]);


        #for png

        exec('inkscape --export-type="png" --export-area-snap -h 800 "' . $SvgPath . '" -o "' . $pngFileName . '"' . ' 2>&1', $backend_output, $return_var);


        $lockupFileClass[1] = new LockupFiles();
        $lockupFileClass[1]->setFileName($newFileName . ".png");
        $lockupFileClass[1]->setFormat("png");
        $lockupFileClass[1]->setLockup($lockups);
        $lockupFileClass[1]->setOrient($orient);
        $lockupFileClass[1]->setStyle($color);
        $lockupFileClass[1]->setTemplate($lockups->getTemplate());
        $lockupFileClass[1]->setUrl($pngUrlName);
        $lockupFileClass[1]->setDirectory($pngFileName);
        $lockupFileClass[1]->setPathName($pngPathName);
        $this->doctrine->getManager()->persist($lockupFileClass[1]);


        #for jpg | convert is a imagemagick function
        $bg = $rev ? '-background "#000000" -flatten ' : '-background "#ffffff" -flatten ';
        exec('convert "' . $pngFileName . '" ' . $bg . ' "' . $jpgFileName . '" 2>&1', $backend_output, $return_var);

        $lockupFileClass[2] = new LockupFiles();
        $lockupFileClass[2]->setFileName($newFileName . ".jpg");
        $lockupFileClass[2]->setFormat("jpg");
        $lockupFileClass[2]->setLockup($lockups);
        $lockupFileClass[2]->setOrient($orient);
        $lockupFileClass[2]->setStyle($color);
        $lockupFileClass[2]->setTemplate($lockups->getTemplate());
        $lockupFileClass[2]->setUrl($jpgUrlName);
        $lockupFileClass[2]->setDirectory($jpgFileName);
        $lockupFileClass[2]->setPathName($jpgPathName);
        $this->doctrine->getManager()->persist($lockupFileClass[2]);

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

        $lockupFileClass[3] = new LockupFiles();
        $lockupFileClass[3]->setFileName($newFileName . ".eps");
        $lockupFileClass[3]->setFormat("eps");
        $lockupFileClass[3]->setLockup($lockups);
        $lockupFileClass[3]->setOrient($orient);
        $lockupFileClass[3]->setStyle($color);
        $lockupFileClass[3]->setTemplate($lockups->getTemplate());
        $lockupFileClass[3]->setUrl($epsUrlName);
        $lockupFileClass[3]->setDirectory($epsFileName);
        $lockupFileClass[3]->setPathName($epsPathName);
        $this->doctrine->getManager()->persist($lockupFileClass[3]);

        #for .ai
        copy($epsFileName, $aiFileName);

        $lockupFileClass[4] = new LockupFiles();
        $lockupFileClass[4]->setFileName($newFileName . ".ai");
        $lockupFileClass[4]->setFormat("ai");
        $lockupFileClass[4]->setLockup($lockups);
        $lockupFileClass[4]->setOrient($orient);
        $lockupFileClass[4]->setStyle($color);
        $lockupFileClass[4]->setTemplate($lockups->getTemplate());
        $lockupFileClass[4]->setUrl($aiUrlName);
        $lockupFileClass[4]->setDirectory($aiFileName);
        $lockupFileClass[4]->setPathName($aiPathName);
        $this->doctrine->getManager()->persist($lockupFileClass[4]);

        #for pdf
        if ($color != "pms186cp") { //no pdf for pms
            $options = '';
            if ($color == '4c') {
                $options = '-dProcessColorModel=/DeviceCMYK ';
            }
            exec('ps2pdf ' . $options . ' "' . $epsFileName . '" "' . $pdfFileName . '" 2>&1', $backend_output, $return_var);
    
            $lockupFileClass[5] = new LockupFiles();
            $lockupFileClass[5]->setFileName($newFileName . ".pdf");
            $lockupFileClass[5]->setFormat("pdf");
            $lockupFileClass[5]->setLockup($lockups);
            $lockupFileClass[5]->setOrient($orient);
            $lockupFileClass[5]->setStyle($color);
            $lockupFileClass[5]->setTemplate($lockups->getTemplate());
            $lockupFileClass[5]->setUrl($pdfUrlName);
            $lockupFileClass[5]->setDirectory($pdfFileName);
            $lockupFileClass[5]->setPathName($pdfPathName);
            $this->doctrine->getManager()->persist($lockupFileClass[5]);
        }

        $this->doctrine->getManager()->flush();
        return true;
    }
}
