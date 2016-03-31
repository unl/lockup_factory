<?php
use Models\Lockup;

class SvgGenerator {
	const SCARLET = '#d00000';
	const WHITE = '#ffffff';
	const BLACK = '#000000';
	const PANTONE_RED = '#da1a32';
	const CMYK_RED = '#d41f26';

	const TUNGSTEN = \Core::ROOT . '/src/SVGFonts/Tungsten-Semibold.svg';
	const MERCURY = \Core::ROOT . '/src/SVGFonts/MercuryDisplay-SemIta.svg';

	const HORIZ_N_OUTLINE_R = "M37.27894812 34.48421122h.33157896c.14210526 0 .1894737 0 .26052632.04736842.09473684.04736842.14210526.14210526.14210526.26052632 0 .09473684-.0236842.16578948-.07105263.2368421-.0236842.04736843-.07105263.04736843-.14210526.09473685h-.02368422l.26052633.49736844h-.1894737l-.2368421-.47368422h-.14210527v.47368422h-.18947368v-1.13684212zm.28421054.49736843h.09473684c.09473684-.0236842.14210527-.07105264.14210527-.1894737 0-.07105262-.0236842-.11842105-.09473685-.14210526h-.23684211v.33157895h.09473686zM34.815789 0H20.842105v10.65789H23.210526v5.87369L13.073684.54474 12.742105 0H0v10.65789H2.368421v14.68422H0V36H15.157895V25.34211H12.789474v-5.87369l10.136842 15.98684.355263.54474H36V25.34211H33.631579V10.65789H36V0h-1.184211zm.710527 1.18421v9h-2.368421v15.63158h2.368421v9.71053H23.542105l-.213158-.33158-11.013158-17.36053v7.98158h2.368422v9.71053H.473684v-9.71053h2.368421V10.18421H.473684V.47368h11.984211l.213158.33158 11.013158 17.36053v-7.98158h-2.368422V.47368h14.210527v.71053z";
	const HORIZ_N_R_CIRCLE = "M37.681579 34.10526c-.544737 0-.971053.42632-.971053.94737S37.136842 36 37.657895 36c.521052 0 .947368-.42632.947368-.94737s-.426316-.94737-.923684-.94737zm-.02368 1.70527c-.426316 0-.757895-.33158-.757895-.7579 0-.42631.331579-.75789.757895-.75789.402631 0 .757894.35526.757894.75789 0 .42632-.331578.7579-.757894.7579z";
	const HORIZ_N_FILL = "M24.394737 20.60526L12.078947 1.18421H1.184211v8.28947h2.368421v17.05264H1.184211v8.28947h12.789473v-8.28947h-2.368421V15.39474l12.31579 19.42105h10.894736v-8.28947h-2.368421V9.47368h2.368421V1.18421H22.026316v8.28947h2.368421v11.13158z";
	const HORIZ_N_SERIF = "M37.657895 35.81053c-.426316 0-.757895-.33158-.757895-.7579 0-.42631.331579-.75789.757895-.75789.402631 0 .757894.35526.757894.75789 0 .42632-.331578.7579-.757894.7579z";
	const HORIZ_N_R_FILL = "M34.815789.47368h-13.5v9.71053h2.368422v7.98158L12.671053.80526l-.189474-.33158H.473684v9.71053h2.368421v15.63158H.473684v9.71053h14.210527v-9.71053h-2.368422v-7.98158l11.013158 17.36053.213158.33158h11.984211v-9.71053h-2.368421V10.18421h2.368421V.47368h-.710527zM13.973684 26.52632v8.28947H1.184211v-8.28947h2.368421V9.47368H1.184211V1.18421h10.894736l12.31579 19.42105V9.47368h-2.368421V1.18421h12.789473v8.28947h-2.368421v17.05264h2.368421v8.28947H23.921053l-12.31579-19.42105v11.13158h2.368421z";

	const VERT_N_OUTLINE_R = "M119.27942132 34.48421092h.33157896c.14210526 0 .1894737 0 .26052632.04736842.09473684.04736842.14210526.14210526.14210526.26052632 0 .09473684-.0236842.16578948-.07105263.2368421-.0236842.04736843-.07105263.04736843-.14210526.09473685h-.02368422l.26052633.49736844h-.1894737l-.2368421-.47368422h-.14210527v.47368422h-.18947368v-1.13684212zm.28421054.49736843h.09473684c.09473684-.0236842.14210527-.07105264.14210527-.1894737 0-.07105262-.02368422-.11842105-.09473685-.14210526h-.23684211v.33157895h.09473686zM116.81579 0h-13.97368V10.65789h2.36842v5.87369L95.073684.5447397 94.742105 0H82V10.65789h2.368421v14.68422H82V36h15.157896V25.34211H94.789475v-5.87369l10.136845 15.98684.35526.54474H118V25.34211h-2.36842V10.65789H118V 0h-1.18421zm.71053 1.18421V10.18421h-2.36842v15.63158h2.36842v9.71053H105.54211l-.21316-.33158-11.013161-17.36053v7.98158h2.368422v9.71053H82.473684v-9.71053h2.368421V10.18421h-2.368421V.4736797h11.984211l.213158.33158L105.68421 18.16579v-7.98158h-2.36842V.4736797h14.21053v.71053z";
	const VERT_N_R_CIRCLE = "M119.68205 34.10526c-.54474 0-.97105.42632-.97105.94737s.42631.94737.94737.94737c.52105 0 .94736-.42632.94736-.94737s-.42631-.94737-.92368-.94737zm-.0237 1.70527c-.42632 0-.7579-.33158-.7579-.7579 0-.42631.33158-.75789.7579-.75789.40263 0 .75789.35526.75789.75789 0 .42632-.33157.7579-.75789.7579z";
	const VERT_N_FILL = "M106.39474 20.60526L94.078946 1.1842097H83.18421V9.47368h2.368421v17.05264H83.18421v8.28947h12.789473v-8.28947h-2.368421V15.39474l12.315788 19.42105h10.89474v-8.28947h-2.36842V9.47368h2.36842V1.1842097h-12.78947V9.47368h2.36842v11.13158z";
	const VERT_N_SERIF = "M119.65837 35.81053c-.42632 0-.7579-.33158-.7579-.7579 0-.42631.33158-.75789.7579-.75789.40263 0 .75789.35526.75789.75789 0 .42632-.33158.7579-.75789.7579z";
	const VERT_N_R_FILL = "M116.81579.4736797h-13.5V10.18421h2.36842v7.98158L94.67105.8052597l-.189474-.33158H82.473681V10.18421h2.368421v15.63158h-2.368421v9.71053h14.210527v-9.71053h-2.368422v-7.98158l11.013164 17.36053.21316.33158H117.52632v-9.71053h-2.36842V10.18421h2.36842V.4736797h-.71053zM95.973681 26.52632v8.28947H83.184208v-8.28947h2.368421V9.47368h-2.368421V1.1842097h10.894736L106.39474 20.60526V9.47368h-2.36843V1.1842097h12.78948V9.47368h-2.36842v17.05264h2.36842v8.28947h-10.89474L93.60526 15.39474v11.13158h2.368421z";

	public static $lockup_templates_directory = __DIR__ . '/LockupTemplates';

	public static function createPreviewLockup($template, $lockup, $orient = 'horiz') {
		return self::createLockup($template, $lockup, $orient, 'RGB', FALSE, TRUE);
	}

	public static function createLockup($template, $lockup, $orient = 'horiz', $style = 'RGB', $rev = FALSE, $preview = FALSE) {
		$svg = new \EasySVG();
		$main_text_color = self::SCARLET;
		$secondary_text_color = self::BLACK;
		$n_main_color = self::SCARLET;
		$n_secondary_color = self::WHITE;

		switch ($style) {
			case 'RGB':
				if (!$rev) {
					$main_text_color = self::SCARLET;
					$secondary_text_color = self::BLACK;
					$n_main_color = self::SCARLET;
					$n_secondary_color = self::WHITE;
				} else {
					$main_text_color = self::WHITE;
					$secondary_text_color = self::WHITE;
					$n_main_color = self::SCARLET;
					$n_secondary_color = self::WHITE;
				}
				break;
			case 'pms186cp':
				if (!$rev) {
					$main_text_color = self::PANTONE_RED;
					$secondary_text_color = self::PANTONE_RED;
					$n_main_color = self::PANTONE_RED;
					$n_secondary_color = self::WHITE;
				} else {
					$main_text_color = self::WHITE;
					$secondary_text_color = self::WHITE;
					$n_main_color = self::PANTONE_RED;
					$n_secondary_color = self::WHITE;
				}
				break;
			case '4c':
				if (!$rev) {
					$main_text_color = self::CMYK_RED;
					$secondary_text_color = self::BLACK;
					$n_main_color = self::CMYK_RED;
					$n_secondary_color = self::WHITE;
				} else {
					$main_text_color = self::WHITE;
					$secondary_text_color = self::WHITE;
					$n_main_color = self::CMYK_RED;
					$n_secondary_color = self::WHITE;
				}
				break;
			case 'blk':
				if (!$rev) {
					$main_text_color = self::BLACK;
					$secondary_text_color = self::BLACK;
					$n_main_color = self::BLACK;
					$n_secondary_color = self::WHITE;
				} else {
					$main_text_color = self::WHITE;
					$secondary_text_color = self::WHITE;
					$n_main_color = self::WHITE;
					$n_secondary_color = self::BLACK;
				}
				break;
			default:
				break;
		}

		if ($preview) {
			$svg->addAttribute("class", "preview");
		} 

		if ($orient == 'horiz') {
			switch ($template) {
				case 'org_only':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->org_name, 44, 7.75);
					$text_width = $svg->textDimensions($lockup->org_name)[0];

					$svg->addAttribute('viewBox', "0 0 " . ($text_width + 44) . " 36");
					if (!$preview) {
						$svg->addAttribute('height', 36);
						$svg->addAttribute('width', $text_width + 44);
					}
					break;
				case 'org_two_line':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->org_name, 44, 2.25);
					$main_text_width = $svg->textDimensions($lockup->org_name)[0];

					$svg->addText($lockup->org_second_line, 44, 13.25);
					$secondary_text_width = $svg->textDimensions($lockup->org_second_line)[0];

					$svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 36");
					if (!$preview) {
						$svg->addAttribute('height', 36);
						$svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
					}
					break;
				case 'org_subject':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->org_name, 44, 7.75);
					$main_text_width = $svg->textDimensions($lockup->org_name)[0];

					$svg->setFontSVG(self::MERCURY);
					$svg->setLetterSpacing(0);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$svg->addText($lockup->subject, 44, 26);
					$secondary_text_width = $svg->textDimensions($lockup->subject)[0];
					
					$svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 38");
					if (!$preview) {
						$svg->addAttribute('height', 38);
						$svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
					}
					break;
				case 'org_subject_1_2':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->org_name, 44, -5.8);
					$main_text_width = $svg->textDimensions($lockup->org_name)[0];

					$svg->setFontSVG(self::MERCURY);
					$svg->setLetterSpacing(0);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$svg->addText($lockup->subject, 44, 17);
					$secondary_text_width = $svg->textDimensions($lockup->subject)[0];

					$svg->addText($lockup->subject_second_line, 44, 26);
					$third_width = $svg->textDimensions($lockup->subject_second_line)[0];

					$svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width, $third_width) + 44) . " 38");
					if (!$preview) {
						$svg->addAttribute('height', 38);
						$svg->addAttribute('width', max($main_text_width, $secondary_text_width, $third_width) + 44);
					}
					break;
				case 'org_subject_2_1':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->org_name, 44, -5.8);
					$main_text_width = $svg->textDimensions($lockup->org_name)[0];

					$svg->addText($lockup->org_second_line, 44, 5.2);
					$third_width = $svg->textDimensions($lockup->org_second_line)[0];

					$svg->setFontSVG(self::MERCURY);
					$svg->setLetterSpacing(0);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$svg->addText($lockup->subject, 44, 26);
					$secondary_text_width = $svg->textDimensions($lockup->subject)[0];

					$svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width, $third_width) + 44) . " 38");
					if (!$preview) {
						$svg->addAttribute('height', 38);
						$svg->addAttribute('width', max($main_text_width, $secondary_text_width, $third_width) + 44);
					}
					break;
				case 'acronym':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(22);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->acronym, 44, -0.5);
					$text_width = $svg->textDimensions($lockup->acronym)[0];

					$svg->addAttribute('viewBox', "0 0 " . ($text_width + 44) . " 36");
					if (!$preview) {
						$svg->addAttribute('height', 36);
						$svg->addAttribute('width', $text_width + 44);
					}
					break;
				case 'acronym_subject':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(22);
					$svg->setFontColor($main_text_color);
					$svg->addText($lockup->acronym, 44, -10.5);
					$main_text_width = $svg->textDimensions($lockup->acronym)[0];

					$svg->setFontSize(16.25);
					$svg->setFontColor($secondary_text_color);
					$svg->addText($lockup->acronym_subject, 44, 16.25);
					$secondary_text_width = $svg->textDimensions($lockup->acronym_subject)[0];

					$svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 40");
					if (!$preview) {
						$svg->addAttribute('height', 40);
						$svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
					}
					break;
				case 'extension':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setLetterSpacing(0.05);
					$svg->setFontSize(22);
					$svg->setFontColor($main_text_color);
					$svg->addText('EXTENSION', 44, -0.5);
					$main_text_width = $svg->textDimensions('EXTENSION')[0];

					$svg->setFontSVG(self::MERCURY);
					$svg->setLetterSpacing(0);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$svg->addText($lockup->extension_county, 44, 26);
					$secondary_text_width = $svg->textDimensions($lockup->extension_county)[0];

					$svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 38");
					if (!$preview) {
						$svg->addAttribute('height', 38);
						$svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
					}
					break;
			}

			$svg->addPath(self::HORIZ_N_R_CIRCLE, array('fill' => $n_main_color));
			if (!($style == 'blk' && $rev)) {
				$svg->addPath(self::HORIZ_N_R_FILL, array('fill' => $n_secondary_color));
				$svg->addPath(self::HORIZ_N_SERIF, array('fill' => $n_secondary_color));
			}
			$svg->addPath(self::HORIZ_N_FILL, array('fill' => $n_main_color));
			$svg->addPath(self::HORIZ_N_OUTLINE_R, array('fill' => $n_main_color));
		} else if ($orient == 'vert') {
			switch ($template) {
				case 'org_only':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->org_name)[0];
					$svg->addText($lockup->org_name, 100 - ($text_width / 2), 37);
					break;
				case 'org_two_line':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->org_name)[0];
					$svg->addText($lockup->org_name, 100 - ($text_width / 2), 37);

					$text_width = $svg->textDimensions($lockup->org_second_line)[0];
					$svg->addText($lockup->org_second_line, 100 - ($text_width / 2), 48);
					break;
				case 'org_subject':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->org_name)[0];
					$svg->addText($lockup->org_name, 100 - ($text_width / 2), 37);

					$svg->setFontSVG(self::MERCURY);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$text_width = $svg->textDimensions($lockup->subject)[0];
					$svg->addText($lockup->subject, 100 - ($text_width / 2), 55);
					break;
				case 'org_subject_1_2':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->org_name)[0];
					$svg->addText($lockup->org_name, 100 - ($text_width / 2), 37);

					$svg->setFontSVG(self::MERCURY);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$text_width = $svg->textDimensions($lockup->subject)[0];
					$svg->addText($lockup->subject, 100 - ($text_width / 2), 55);

					$text_width = $svg->textDimensions($lockup->subject_second_line)[0];
					$svg->addText($lockup->subject_second_line, 100 - ($text_width / 2), 64);
					break;
				case 'org_subject_2_1':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(12);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->org_name)[0];
					$svg->addText($lockup->org_name, 100 - ($text_width / 2), 37);

					$text_width = $svg->textDimensions($lockup->org_second_line)[0];
					$svg->addText($lockup->org_second_line, 100 - ($text_width / 2), 48);

					$svg->setFontSVG(self::MERCURY);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$text_width = $svg->textDimensions($lockup->subject)[0];
					$svg->addText($lockup->subject, 100 - ($text_width / 2), 66);
					break;
				case 'acronym':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(22);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->acronym)[0];
					$svg->addText($lockup->acronym, 100 - ($text_width / 2), 32);
					break;
				case 'acronym_subject':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(22);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions($lockup->acronym)[0];
					$svg->addText($lockup->acronym, 100 - ($text_width / 2), 32);

					$svg->setFontSize(16.25);
					$svg->setFontColor($secondary_text_color);
					$text_width = $svg->textDimensions($lockup->acronym_subject)[0];
					$svg->addText($lockup->acronym_subject, 100 - ($text_width / 2), 56.25);
					break;
				case 'extension':
					$svg->setFontSVG(self::TUNGSTEN);
					$svg->setFontSize(22);
					$svg->setFontColor($main_text_color);
					$text_width = $svg->textDimensions('EXTENSION')[0];
					$svg->addText('EXTENSION', 100 - ($text_width / 2), 32);

					$svg->setFontSVG(self::MERCURY);
					$svg->setFontSize(8.125);
					$svg->setFontColor($secondary_text_color);
					$text_width = $svg->textDimensions($lockup->extension_county)[0];
					$svg->addText($lockup->extension_county, 100 - ($text_width / 2), 60);
					break;
			}

			$svg->addAttribute('viewBox', "0 0 200 80");
			if (!$preview) {
				$svg->addAttribute('height', 80);
				$svg->addAttribute('width', 200);
			}

			$svg->addPath(self::VERT_N_R_CIRCLE, array('fill' => $n_main_color));
			if (!($style == 'blk' && $rev)) {
				$svg->addPath(self::VERT_N_R_FILL, array('fill' => $n_secondary_color));
				$svg->addPath(self::VERT_N_SERIF, array('fill' => $n_secondary_color));
			}
			$svg->addPath(self::VERT_N_FILL, array('fill' => $n_main_color));
			$svg->addPath(self::VERT_N_OUTLINE_R, array('fill' => $n_main_color));
		}

		return $svg->asXML();
	}

}