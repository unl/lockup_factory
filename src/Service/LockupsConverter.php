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

    public function generateCompleteFolder() : bool
    {
        if (!file_exists($this->saveDirectory . "/id")) {
            mkdir($this->saveDirectory . "/id");
        }
        return false;
    }

    public function saveSvg(string $svgFile, string $fileName): bool
    {
        $svgPath = $this->saveDirectory . "/" . $fileName . '.svg';
        $myfile = fopen($svgPath, "w") or die("Internal error");
        fwrite($myfile, $svgFile);
        fclose($myfile);
        $this->convertAll($svgPath, $fileName);
        return true;
    }
    public function convertAll(string $SvgPath, string $newFileName, bool $rev = false, string $color = "RGB"): bool
    {
        $pngFileName = $this->saveDirectory . "/" . $newFileName . ".png";
        $jpgFileName = $this->saveDirectory . "/" . $newFileName . ".jpg";
        $epsFileName = $this->saveDirectory . "/" . $newFileName . ".eps";
        $aiFileName = $this->saveDirectory . "/" . $newFileName . ".ai";
        $pdfFileName = $this->saveDirectory . "/" . $newFileName . ".pdf";


        #for png
        exec('inkscape --export-type="png" --export-area-snap -h 800 "' . $SvgPath . '" -o "' . $pngFileName . '"' . '2>&1', $backend_output, $return_var);

        #for jpg | convert is a imagemagick function
        $bg = $rev ? '-background "#000000" -flatten ' : '-background "#ffffff" -flatten ';
        exec('convert ' . $pngFileName . ' ' . $bg . ' ' . $jpgFileName . ' 2>&1', $backend_output, $return_var);

        #for eps
        exec('inkscape --export-type="eps" --export-area-snap --export-area-drawing "' . $SvgPath . '" -o "' . $epsFileName . '"'. '2>&1', $backend_output, $return_var);

        #for .ai
        copy($epsFileName, $aiFileName);
        
        #for pdf
        $options = '';
		if ($color == '4c') {
			$options = '-dProcessColorModel=/DeviceCMYK ';
		}
		exec('ps2pdf ' . $options . $epsFileName . ' ' . $pdfFileName . ' 2>&1', $backend_output, $return_var);

        return true;
    }
}
