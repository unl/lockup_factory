<?php

namespace App\Service;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\KernelInterface;
use App\Entity\Lockups;
use App\Entity\LockupFiles;
use App\Service\Core;
use ZipArchive;


class LockupsConverter
{
    private $doctrine;
    private $appKernel;
    private $projectRoot;
    private $saveDirectory;
    private $lockups;
    private $core;
    private $urlSuffix;

    public function __construct(ManagerRegistry $doctrine, KernelInterface $appKernel, Core $core)
    {
        $this->doctrine = $doctrine;
        $this->appKernel = $appKernel;
        $this->projectRoot = $this->appKernel->getProjectDir();
        $this->saveDirectory = realpath($this->projectRoot . "/public/lockups/");
        $this->core = $core;
        $this->urlSuffix = "/lockups" . "/";

    }

    public function setLockup(Lockups $lockups)
    {
        $this->lockups = $lockups;
        return;
    }

    private function createFolder(string $folderName): string
    {
        if (!file_exists($folderName)) {
            // mkdir($folderName, 0770, true);
            exec('mkdir ' . escapeshellarg($folderName));
        }
        return $folderName;
    }

    public function deteleLockupsFolder()
    {
        exec('rm -rf ' . $this->saveFolder());
    }

    public function savePath(): string
    {
        $savePath = (string)$this->lockups->getId() . "_" . $this->core->getLockupFileName($this->lockups) . "/";
        return $savePath;
    }

    public function saveFolder(): string
    {
        $saveFolder = $this->saveDirectory . "/" . $this->savePath();
        $this->createFolder($saveFolder);
        return $saveFolder;
    }

    public function createZip(Lockups $lockup)
    {
        $lockupFiles = $this->doctrine->getRepository(LockupFiles::class)->findBy(['lockup' => $lockup->getId()]);
        $fileName = "N_" . $this->core->getLockupFileName($lockup) . "_lockups.zip";
        $zippathName = $this->saveFolder() . $fileName;

        $zipDownloadUrl = $this->urlSuffix . $this->savePath() . $fileName;

        $zip = new ZipArchive;
        if ($zip->open($zippathName, ZipArchive::CREATE) === TRUE) {
            // Add files to the zip file
            foreach ($lockupFiles as $item) {
                $zip->addFile($item->getDirectory(), $item->getPathName());
            }
            $zip->addFile($this->projectRoot . "/public/convert_pantone.jsx", "convert_pantone.jsx");
            // All files are added, so close the zip file.
            $zip->close();
        }
        $lockup->setZipUrl($zipDownloadUrl);
        $this->doctrine->getManager()->persist($lockup);
        $this->doctrine->getManager()->flush();
    }

    public function saveSvg(Lockups $lockups, string $SVG, string $orient, bool $rev = false, string $color = "RGB"): bool
    {
        $fileName = $this->core->getLockupFileName($lockups);
        $svgFile = $orient . $fileName . $color . '.svg';
        $svgPath = $this->saveFolder() . $svgFile;
        $myfile = fopen($svgPath, "w") or die("Internal error");
        fwrite($myfile, $SVG);
        fclose($myfile);
        $this->convertAll($lockups, $svgPath, $orient, $rev, $color);
        unlink($svgPath);
        return true;
    }

    public function convertAll(Lockups $lockups, string $SvgPath, string $orient, bool $rev = false, string $color = "RGB"): bool
    {
        $fileName = $this->core->getLockupFileName($lockups);
        $pathName = "";

        if ($orient == "h") {
            if ($lockups->getTemplate()->getCategory()->getId() == 3) { //merchandise
                $pathName = "Nh_2023_m_" . $this->core->getLockupFileName($lockups) . "/";
                $fileName = "Nh_2023_m" . $fileName;
            }
            else if ($lockups->getTemplate()->getCategory()->getId() == 4) { // embroidery
                $pathName = "Nh_2023_e_" . $this->core->getLockupFileName($lockups) . "/";
                $fileName = "Nh_2023_e_" . $fileName;
            }
            else {
                $pathName = "Nh_2023_" . $this->core->getLockupFileName($lockups) . "/";
                $fileName = "Nh_2023_" . $fileName;
            }
        }
        else {
            if ($lockups->getTemplate()->getCategory()->getId() == 3) { //merchandise
                $pathName = "Nv_2023_m_" . $this->core->getLockupFileName($lockups) . "/";
                $fileName = "Nv_2023_m" . $fileName;
            }
            else if ($lockups->getTemplate()->getCategory()->getId() == 4) { // embroidery
                $pathName = "Nv_2023_e_" . $this->core->getLockupFileName($lockups) . "/";
                $fileName = "Nv_2023_e_" . $fileName;
            }
            else {
                $pathName = "Nv_2023_" . $this->core->getLockupFileName($lockups) . "/";
                $fileName = "Nv_2023_" . $fileName;
            }
        }

        $fileName = $fileName . "_";

        switch ($color) {
            case "RGB":
                $pathName = $pathName . "RGB_HEX/";
                $fileName = $fileName . "RGB";
                break;
            case "pms186cp":
                $pathName = $pathName . "PMS186cp/";
                $fileName = $fileName . "pms186cp";
                break;
            case "4c":
                $pathName = $pathName . "4c_CMYK/";
                $fileName = $fileName . "4c";
                break;
            case "blk":
                $fileName = $fileName . "blk";
                if ($rev) {
                    $pathName = $pathName . "Rev/";
                }
                else {
                    $pathName = $pathName . "Black/";
                }
                break;
        }

        $this->createFolder($pathName);

        if ($rev == true) {
            $fileName = $fileName . "_rev";
        }

        $this->urlSuffix = "/lockups" . "/";

        $svgPathName = $pathName . $fileName . ".svg";
        $svgDirectory = $this->saveFolder() . $svgPathName;

        $pngPathName = $pathName . $fileName . ".png";
        $pngDirectory = $this->saveFolder() . $pngPathName;

        $jpgPathName = $pathName . $fileName . ".jpg";
        $jpgDirectory = $this->saveFolder() . $jpgPathName;

        $epsPathName = $pathName . $fileName . ".eps";
        $epsDirectory = $this->saveFolder() . $epsPathName;

        $aiPathName = $pathName . $fileName . ".ai";
        $aiDirectory = $this->saveFolder() . $aiPathName;

        $pdfPathName = $pathName . $fileName . ".pdf";
        $pdfDirectory = $this->saveFolder() . $pdfPathName;


        $lockupFileClass = [];

        #for svg

        if ($color != "4c" || $color != "pms186cp") {

            // exec('inkscape --export-type="svg" --export-plain-svg --export-area-snap "' . $SvgPath . '" -o "' . $svgDirectory . '"' . ' 2>&1', $backend_output, $return_var);
            exec('inkscape' . ' --export-plain-svg=' . escapeshellarg($svgDirectory) . ' ' . escapeshellarg($SvgPath) . ' 2>&1', $backend_output, $return_var);

            $lockupFileClass[0] = new LockupFiles();
            $lockupFileClass[0]->setFileName($fileName . ".svg");
            $lockupFileClass[0]->setFormat("svg");
            $lockupFileClass[0]->setLockup($lockups);
            $lockupFileClass[0]->setOrient($orient);
            $lockupFileClass[0]->setStyle($color);
            $lockupFileClass[0]->setTemplate($lockups->getTemplate());
            $lockupFileClass[0]->setUrl($this->urlSuffix . $this->savePath() . $svgPathName);
            $lockupFileClass[0]->setDirectory($svgDirectory);
            $lockupFileClass[0]->setPathName($svgPathName);
            $this->doctrine->getManager()->persist($lockupFileClass[0]);
        }


        #for png

        if ($color != "pms186cp") {
            // exec('inkscape --export-type="png" --export-area-snap -h 800 "' . $SvgPath . '" -o "' . $pngDirectory . '"' . ' 2>&1', $backend_output, $return_var);
            exec('inkscape -h 800 --export-png=' . escapeshellarg($pngDirectory) . ' ' . escapeshellarg($SvgPath) . ' 2>&1', $backend_output, $return_var);

            if ($color != "4c") {
                $lockupFileClass[1] = new LockupFiles();
                $lockupFileClass[1]->setFileName($fileName . ".png");
                $lockupFileClass[1]->setFormat("png");
                $lockupFileClass[1]->setLockup($lockups);
                $lockupFileClass[1]->setOrient($orient);
                $lockupFileClass[1]->setStyle($color);
                $lockupFileClass[1]->setTemplate($lockups->getTemplate());
                $lockupFileClass[1]->setUrl($this->urlSuffix . $this->savePath() . $pngPathName);
                $lockupFileClass[1]->setDirectory($pngDirectory);
                $lockupFileClass[1]->setPathName($pngPathName);
                $this->doctrine->getManager()->persist($lockupFileClass[1]);

            }
            if ($rev == false) {

                #for jpg | convert is a imagemagick function
                $bg = $rev ? '-background "#000000" -flatten ' : '-background "#ffffff" -flatten ';
                // exec('convert "' . $pngDirectory . '" ' . $bg . ' "' . $jpgDirectory . '" 2>&1', $backend_output, $return_var);
                exec('convert ' . $bg. escapeshellarg($pngDirectory) . ' ' . escapeshellarg($jpgDirectory) . ' 2>&1', $backend_output, $return_var);

                $lockupFileClass[2] = new LockupFiles();
                $lockupFileClass[2]->setFileName($fileName . ".jpg");
                $lockupFileClass[2]->setFormat("jpg");
                $lockupFileClass[2]->setLockup($lockups);
                $lockupFileClass[2]->setOrient($orient);
                $lockupFileClass[2]->setStyle($color);
                $lockupFileClass[2]->setTemplate($lockups->getTemplate());
                $lockupFileClass[2]->setUrl($this->urlSuffix . $this->savePath() . $jpgPathName);
                $lockupFileClass[2]->setDirectory($jpgDirectory);
                $lockupFileClass[2]->setPathName($jpgPathName);
                $this->doctrine->getManager()->persist($lockupFileClass[2]);
            }

            #for eps
            // exec('inkscape --export-type="eps" --export-area-snap --export-area-drawing "' . $SvgPath . '" -o "' . $epsDirectory . '"' . ' 2>&1', $backend_output, $return_var);
            exec('inkscape -C --export-eps=' . escapeshellarg($epsDirectory) . ' ' . escapeshellarg($SvgPath) . ' 2>&1', $backend_output, $return_var);

            # POSSIBLE FIX: replace the rgb colors in teh cairo commands with cmyk here (for both 4c and Pantone?)
            if ($color == '4c') {
                $file = fopen($epsDirectory, 'r');
                $data = fread($file, filesize($epsDirectory));
                $data = str_replace('setrgbcolor', 'setcmykcolor', $data); # changes the rg cairo command to setcmykcolor
                $data = str_replace('0.2 0.6 0.4 rg', '1 0 0.90 0 rg', $data); # replaces green of 4H
                $data = str_replace('0.854902 0.101961 0.196078 rg', '0.02 1 0.85 0.06 rg', $data); # replaces scarlet red
                fclose($file);

                $file = fopen($epsDirectory, 'w');
                fwrite($file, $data);
                fclose($file);
            }

            $lockupFileClass[3] = new LockupFiles();
            $lockupFileClass[3]->setFileName($fileName . ".eps");
            $lockupFileClass[3]->setFormat("eps");
            $lockupFileClass[3]->setLockup($lockups);
            $lockupFileClass[3]->setOrient($orient);
            $lockupFileClass[3]->setStyle($color);
            $lockupFileClass[3]->setTemplate($lockups->getTemplate());
            $lockupFileClass[3]->setUrl($this->urlSuffix . $this->savePath() . $epsPathName);
            $lockupFileClass[3]->setDirectory($epsDirectory);
            $lockupFileClass[3]->setPathName($epsPathName);
            $this->doctrine->getManager()->persist($lockupFileClass[3]);
        }


        #for .ai
        if ($color == "pms186cp") {
            if ($orient == "h") {
                $aiTemplateDir = $this->projectRoot . "/public/Nh_template.ai";
            }
            else {
                $aiTemplateDir = $this->projectRoot . "/public/Nv_template.ai";

            }
            copy($aiTemplateDir, $aiDirectory);
        }
        else {
            copy($epsDirectory, $aiDirectory);
        }


        $lockupFileClass[4] = new LockupFiles();
        $lockupFileClass[4]->setFileName($fileName . ".ai");
        $lockupFileClass[4]->setFormat("ai");
        $lockupFileClass[4]->setLockup($lockups);
        $lockupFileClass[4]->setOrient($orient);
        $lockupFileClass[4]->setStyle($color);
        $lockupFileClass[4]->setTemplate($lockups->getTemplate());
        $lockupFileClass[4]->setUrl($this->urlSuffix . $this->savePath() . $aiPathName);
        $lockupFileClass[4]->setDirectory($aiDirectory);
        $lockupFileClass[4]->setPathName($aiPathName);
        $this->doctrine->getManager()->persist($lockupFileClass[4]);

        #for pdf
        // if ($color != "pms186cp") { //no pdf for pms
        //     $options = '';
        //     if ($color == '4c') {
        //         $options = '-dProcessColorModel=/DeviceCMYK ';
        //     }
        //     exec('ps2pdf ' . $options . ' "' . $epsDirectory . '" "' . $pdfDirectory . '" 2>&1', $backend_output, $return_var);

        //     $lockupFileClass[5] = new LockupFiles();
        //     $lockupFileClass[5]->setFileName($fileName . ".pdf");
        //     $lockupFileClass[5]->setFormat("pdf");
        //     $lockupFileClass[5]->setLockup($lockups);
        //     $lockupFileClass[5]->setOrient($orient);
        //     $lockupFileClass[5]->setStyle($color);
        //     $lockupFileClass[5]->setTemplate($lockups->getTemplate());
        //     $lockupFileClass[5]->setUrl($this->urlSuffix . $this->savePath() . $pdfPathName);
        //     $lockupFileClass[5]->setDirectory($pdfDirectory);
        //     $lockupFileClass[5]->setPathName($pdfPathName);
        //     $this->doctrine->getManager()->persist($lockupFileClass[5]);
        // }

        $this->doctrine->getManager()->flush();
        return true;
    }
}
