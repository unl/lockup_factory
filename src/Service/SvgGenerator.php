<?php

namespace App\Service;

use App\Service\EasySVG;
use App\Entity\LockupTemplates;
use Symfony\Component\HttpKernel\KernelInterface;
use Psr\Log\LoggerInterface;

use Doctrine\Persistence\ManagerRegistry;

class SvgGenerator
{
    const SCARLET = '#d00000';
    const WHITE = '#ffffff';
    const BLACK = '#000000';
    const NONE = 'none';
    const FOUR_H_GREEN = '#339966'; #pantone for this is 347U
    const PANTONE_RED = '#cf0a2c'; #pantone 186cp
    const CMYK_RED = '#da1a32 device-cmyk(0.02, 1.00, 0.85, 0.06)';

    // MAKE SURE TO CHANGE THE EPS-CMYK FIX IN LOCKUPS CONVERTER IF YOU CHANGE COLORS!!!

    private $projectDir;
    private $doctrine;
    private $logger;
    private $tmpDirectory;

    public function __construct(KernelInterface $appKernel, ManagerRegistry $doctrine, LoggerInterface $logger)
    {
        $this->doctrine = $doctrine;
        $this->logger = $logger;

        $this->projectDir = $appKernel->getProjectDir();

        $this->tmpDirectory = $this->projectDir . "/public/temp/";
        $this->logger->info($this->tmpDirectory);

        if (!file_exists($this->tmpDirectory)) {
            mkdir($this->tmpDirectory, 0777, true);
        }
    }

    public function createLockup($template, $lockup, $orient = 'h', $style = 'RGB', $rev = false, $preview = false): string
    {
        // $svg = new EasySVG();
        $text_main_color = self::SCARLET;
        $text_secondary_color = self::BLACK;
        $n_main_color = self::SCARLET;
        $n_secondary_color = self::WHITE;
        $clover_color = self::FOUR_H_GREEN;
        $clover_h_color = self::WHITE;

        switch ($style) {
            case 'RGB':
                if ($template == 'v_social') {
                    $text_main_color = self::WHITE;
                    $text_secondary_color = self::WHITE;
                    $n_main_color = self::WHITE;
                    $n_secondary_color = self::SCARLET;
                    break;
                }
                if (!$rev) {
                    $text_main_color = self::SCARLET;
                    $text_secondary_color = self::BLACK;
                    $n_main_color = self::SCARLET;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                    $clover_h_color = self::WHITE;
                } else {
                    $text_main_color = self::WHITE;
                    $text_secondary_color = self::WHITE;
                    $n_main_color = self::SCARLET;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                    $clover_h_color = self::WHITE;
                }
                break;
            case 'pms186cp':
                if (!$rev) {
                    $text_main_color = self::PANTONE_RED;
                    $text_secondary_color = self::PANTONE_RED;
                    $n_main_color = self::PANTONE_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                    $clover_h_color = self::WHITE;
                } else {
                    $text_main_color = self::WHITE;
                    $text_secondary_color = self::WHITE;
                    $n_main_color = self::PANTONE_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                    $clover_h_color = self::WHITE;
                }
                break;
            case '4c':
                if (!$rev) {
                    $text_main_color = self::CMYK_RED;
                    $text_secondary_color = self::BLACK;
                    $n_main_color = self::CMYK_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                    $clover_h_color = self::WHITE;
                } else {
                    $text_main_color = self::WHITE;
                    $text_secondary_color = self::WHITE;
                    $n_main_color = self::CMYK_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                    $clover_h_color = self::WHITE;
                }
                break;
            case 'blk':
                if (!$rev) {
                    $text_main_color = self::BLACK;
                    $text_secondary_color = self::BLACK;
                    $n_main_color = self::BLACK;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::BLACK;
                    $clover_h_color = self::WHITE;
                } else {
                    $text_main_color = self::WHITE;
                    $text_secondary_color = self::WHITE;
                    $n_main_color = self::WHITE;
                    $n_secondary_color = self::NONE;
                    $clover_color = self::WHITE;
                    $clover_h_color = self::NONE;
                }
                break;
            default:
                break;
        }

        if (!isset($clover_h_color)) {
            $clover_h_color = $n_secondary_color;
        }

        if (($template == "h_ncta" || $template == "v_ncta") && $preview) {
            $text_main_color = self::BLACK;
            $text_secondary_color = self::BLACK;
            $n_main_color = self::BLACK;
            $n_secondary_color = self::WHITE;
        }

        $this->logger->info($template);
        $this->logger->info($style);
        $this->logger->info($rev);
        $this->logger->info($preview);

        $lockup_template = $this->doctrine->getRepository(LockupTemplates::class)->findOneBy(array('slug' => $template));
        $this->logger->info('ORIGINAL TEMPLATE');
        $this->logger->info($lockup_template->getSVG());
        $svgXML = new \SimpleXMLElement($lockup_template->getSVG());
        $svgXML->registerXPathNamespace('svg', 'http://www.w3.org/2000/svg');

        if ($preview) {
            $svgXML->addAttribute("class", "preview");
        }

        $this->logger->info('LOCKUP FIELDS');
        foreach ($lockup as $lockup_field) {
            $lockup_field_slug = $lockup_field->getFields()->getSlug();
            $lockup_field_value = $lockup_field->getValue();

            $this->logger->info($lockup_field_slug);
            $this->logger->info($lockup_field_value);

            if ($lockup_field->getFields()->getUppercase() == 1) {
                $lockup_field_value = strtoupper($lockup_field->getValue());
            }

            $slug_elements = $svgXML->xpath('//svg:tspan[@class="' . $lockup_field_slug . '"]');
            if (isset($slug_elements) && $slug_elements !== false) {
                $this->logger->info(count($slug_elements));
                foreach ($slug_elements as $slug_element) {
                    $slug_element[0] = $lockup_field_value;
                    $this->logger->info($slug_element->__toString());
                }
            } else {
                $this->logger->info('none');
            }
        }

        $colors = array(
            'n_main_color' => $n_main_color,
            'n_secondary_color' => $n_secondary_color,
            'text_main_color' => $text_main_color,
            'text_secondary_color' => $text_secondary_color,
            'clover_color' => $clover_color,
            'clover_h_color' => $clover_h_color,
        );

        $this->logger->info('COLORS');
        foreach ($colors as $color_name => $color_value) {
            $color_elements = $svgXML->xpath('//svg:*[@class="' . $color_name . '"]');
            $this->logger->info($color_name);
            $this->logger->info($color_value);
            if (isset($color_elements) && $color_elements !== false) {
                $this->logger->info(count($color_elements));
                foreach ($color_elements as $single_color_element) {
                    $single_color_element['fill'] = $color_value;
                    $this->logger->info($single_color_element['fill']);
                }
            } else {
                $this->logger->info('none');
            }
        }

        $center_line_elements = $svgXML->xpath('//svg:*[@class="center_line"]');
        if (isset($center_line_elements) && $center_line_elements !== false) {
            $this->logger->info(count($center_line_elements));
            foreach ($center_line_elements as $single_center_line_element) {
                $single_center_line_element['stroke'] = $text_secondary_color;
                $this->logger->info($single_color_element['stroke']);
            }
        } else {
            $this->logger->info('none');
        }

        $this->logger->info('NEW SVG');
        $this->logger->info($svgXML->asXML());


        $textSVGFile = uniqid('text_svg_', true) . '.svg';
        $pathSVGFile = uniqid('path_svg_', true) . '.svg';

        $textSVGPath = $this->tmpDirectory . $textSVGFile;
        $pathSVGPath = $this->tmpDirectory . $pathSVGFile;

        $this->logger->info($textSVGPath);

        $textSVGWrite = file_put_contents($textSVGPath, $svgXML->asXML());

        if ($textSVGWrite === false) {
            die("Internal error");
        }

        exec("inkscape --action-list", $actionList, $actionListCode);

        $this->logger->info($actionListCode);
        $this->logger->info(implode("", $actionList));

        if ($actionListCode !== 0
            || strpos(implode("", $actionList), 'select-all') === false
            || strpos(implode("", $actionList), 'page-fit-to-selection') === false
        ){
            exec("inkscape " . $textSVGPath . " --verb='EditSelectAll;FitCanvasToSelection' --export-text-to-path --export-plain-svg --export-type=svg --export-filename=" . $pathSVGPath, $execOutput, $execCode);
        } else {
            exec("inkscape " . $textSVGPath . " --actions='select-all;page-fit-to-selection' --export-text-to-path --export-plain-svg --export-type=svg --export-filename=" . $pathSVGPath, $execOutput, $execCode);
        }

        $this->logger->info($execCode);

        if ($execCode !== 0) {
            $this->logger->error(implode(' / ', $execOutput));
            die("Internal error");
        }

        $pathSVG = file_get_contents($pathSVGPath);

        unlink($textSVGPath);
        unlink($pathSVGPath);

        $pathSVGXML = new \SimpleXMLElement($pathSVG);
        $this->logger->info($pathSVGXML->asXML());
        return $pathSVGXML->asXML();
    }
}
