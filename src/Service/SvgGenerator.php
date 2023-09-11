<?php

namespace App\Service;

use App\Entity\LockupTemplates;
use Symfony\Component\HttpKernel\KernelInterface;
use Doctrine\Persistence\ManagerRegistry;

class SvgGenerator
{
    // MAKE SURE TO CHANGE THE EPS-CMYK FIX IN LOCKUPS CONVERTER IF YOU CHANGE COLORS!!!
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
    private $tmpDirectory;
    private $inkscapeCommand;

    public function __construct(KernelInterface $appKernel, ManagerRegistry $doctrine, string $inkscapeCommand)
    {
        $this->doctrine = $doctrine;
        $this->inkscapeCommand = $inkscapeCommand;

        $this->projectDir = $appKernel->getProjectDir();

        // This directory is for saving svg temporarily while we are converting things
        $this->tmpDirectory = $this->projectDir . "/public/temp/";
        if (!file_exists($this->tmpDirectory)) {
            mkdir($this->tmpDirectory, 0777, true);
        }
    }

    public function createLockup($template, $lockup, $orient = 'h', $style = 'RGB', $rev = false, $preview = false): string
    {
        // Sets up colors
        $text_main_color = self::SCARLET;
        $text_secondary_color = self::BLACK;
        $n_main_color = self::SCARLET;
        $n_secondary_color = self::WHITE;
        $clover_color = self::FOUR_H_GREEN;
        $clover_h_color = self::WHITE;

        // Updates the colors depending on style, rev, and template
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

        if (($template == "h_ncta" || $template == "v_ncta") && $preview) {
            $text_main_color = self::BLACK;
            $text_secondary_color = self::BLACK;
            $n_main_color = self::BLACK;
            $n_secondary_color = self::WHITE;
        }

        // Gets the lockup template SVG and loads a simpleXMLElement
        $lockup_template = $this->doctrine->getRepository(LockupTemplates::class)->findOneBy(array('slug' => $template));
        $svgXML = new \SimpleXMLElement($lockup_template->getSVG());
        $svgXML->registerXPathNamespace('svg', 'http://www.w3.org/2000/svg');

        // If it is a preview add the class to the SVG tag
        if ($preview) {
            $svgXML->addAttribute("class", "preview");
        }

        // Loop through all the lockup fields and update the text in there
        foreach ($lockup as $lockup_field) {
            // Get the lockup field class and text value
            $lockup_field_slug = $lockup_field->getFields()->getSlug();
            $lockup_field_value = $lockup_field->getValue();

            // Some field's values are uppercase only
            if ($lockup_field->getFields()->getUppercase() == 1) {
                $lockup_field_value = strtoupper($lockup_field->getValue());
            }

            // Find all the tspan with that class (tspan hold the text) and put the text in there
            $slug_elements = $svgXML->xpath('//svg:tspan[@class="' . $lockup_field_slug . '"]');
            if (isset($slug_elements) && $slug_elements !== false) {
                foreach ($slug_elements as $slug_element) {
                    $slug_element[0] = $lockup_field_value;
                }
            }
        }

        // Loop through all the colors and update them
        $colors = array(
            'n_main_color' => $n_main_color,
            'n_secondary_color' => $n_secondary_color,
            'text_main_color' => $text_main_color,
            'text_secondary_color' => $text_secondary_color,
            'clover_color' => $clover_color,
            'clover_h_color' => $clover_h_color,
        );
        foreach ($colors as $color_name => $color_value) {
            // Find the elements who have that color and update their fill value
            $color_elements = $svgXML->xpath('//svg:*[@class="' . $color_name . '"]');
            if (isset($color_elements) && $color_elements !== false) {
                foreach ($color_elements as $single_color_element) {
                    $single_color_element['fill'] = $color_value;
                }
            }
        }

        // The center line on the extension 4h has a stroke not a fill so that is here separate
        $center_line_elements = $svgXML->xpath('//svg:*[@class="center_line"]');
        if (isset($center_line_elements) && $center_line_elements !== false) {
            foreach ($center_line_elements as $single_center_line_element) {
                // This will always match the secondary text color
                $single_center_line_element['stroke'] = $text_secondary_color;
            }
        }


        // Generate the file names for temporary use
        $textSVGFile = uniqid('text_svg_', true) . '.svg';
        $pathSVGFile = uniqid('path_svg_', true) . '.svg';
        $textSVGPath = $this->tmpDirectory . $textSVGFile;
        $pathSVGPath = $this->tmpDirectory . $pathSVGFile;

        // Save the SVG to a file for editing purposes
        $textSVGWrite = file_put_contents($textSVGPath, $svgXML->asXML());

        // If we did not save it then die
        if ($textSVGWrite === false) {
            die("Internal error - Can not write SVG");
        }

        exec($this->inkscapeCommand . ' ' . $textSVGPath . " --actions='select-all;page-fit-to-selection' --export-text-to-path --export-plain-svg --export-type=svg --export-filename=" . $pathSVGPath, $execOutput, $execCode);

        // If we run into issues then die
        if ($execCode !== 0) {
            die("Internal error - Can not execute inkscape command: ");
        }

        // Get the updated file and delete the temp ones
        $pathSVG = file_get_contents($pathSVGPath);
        unlink($textSVGPath);
        unlink($pathSVGPath);

        // Return the text of the newly made SVG(We do this because if anything goes wrong the new file it will cause an error)
        $pathSVGXML = new \SimpleXMLElement($pathSVG);
        return $pathSVGXML->asXML();
    }
}
