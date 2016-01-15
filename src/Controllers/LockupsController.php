<?php
namespace Controllers;
use Models\Lockup;

class LockupsController extends Controller {
	public static $lockup_templates_directory = __DIR__ . '/../LockupTemplates';

	public static function createAction() {
		\Core::$breadcrumbs[] = array('text' => 'Create Lockup');

		$context = new \stdClass;
		return self::renderView('new_lockup', $context);
	}

	public static function postCreateAction($post_params) {
		# validate params, all fields are required

		# take the params and generate a base lockup from that template
		$lockup = new \stdClass;
		$lockup->org_name = strtoupper($post_params['organization']);
		$lockup->org_width = self::calculateTextWidth($lockup->org_name);
		$lockup->width = 152 + 62 + $lockup->org_width + 31; // 152 is the base width/height of the N. 62 is the width of the serif
		$lockup->font_family = 'Tungsten A, Tungsten B';
		$svg_text = self::createLockup('org_only', $lockup);
		
		$model = Lockup::create(array(
			'organization' => $post_params['organization'],
			'affiliation' => NULL,
			'style' => 'org_only',
			'user_id' => NULL,
			'date_created' => date('Y-m-d H:i:s'),
			'preview_svg' => $svg_text
		));

		\Core::redirect($model->getPreviewURL());
	}

	public static function previewAction($get_params) {
		$id = $get_params['id'];
		$lockup = Lockup::find($id);

		if (empty($id) || empty($lockup)) {
			// error
		} else {
			$context = new \stdClass;
			$context->lockup = $lockup;

			return self::renderView('preview_lockup', $context);
		}
	}

	public static function postGenerateAction($post_params) {
		$id = $post_params['id'];
		$lockup_model = Lockup::find($id);

		if (empty($id) || empty($lockup_model)) {
			return 'error';
		} else {
			$lockup = new \stdClass;
			$lockup->org_name = strtoupper($lockup_model->organization);
			$lockup->org_width = self::calculateTextWidth($lockup->org_name);
			$lockup->width = 152 + 62 + $lockup->org_width + 31; // 152 is the base width/height of the N. 62 is the width of the serif
			$lockup->font_family = 'Tungsten';
			$svg_text = self::createLockup('org_only', $lockup);

			# write this to a temp file
			$filename = \Core::ROOT . '/tmp/temp_svg_' . $lockup_model->id . '.svg';

			# mkdir this just incase
			if (!file_exists(\Core::ROOT . '/tmp')) {
			    mkdir(\Core::ROOT . '/tmp', 0777, true);
			}

			$file = fopen($filename, 'w');
			fwrite($file, $svg_text);
			fclose($file);

			# take this svg and make the appropriate files
			$string = self::generateFiles($id);
			return $string;
		}
	}

	private static function createLockup($template, $lockup) {
		ob_start();
		include self::$lockup_templates_directory . '/' . $template . '.tpl.php';
		return ob_get_clean();
	}

	private static function generateFiles($id) {
		$starting_svg = \Core::ROOT . '/tmp/temp_svg_' . $id . '.svg';
		$new_pdf = \Core::ROOT . '/tmp/pdf_' . $id . '.pdf';
		$new_svg = \Core::ROOT . '/tmp/svg_' . $id . '.svg';
		$new_png_100 = \Core::ROOT . '/tmp/png_' . $id . '_100.png';
		$new_png_200 = \Core::ROOT . '/tmp/png_' . $id . '_200.png';
		$new_png_400 = \Core::ROOT . '/tmp/png_' . $id . '_400.png';
		$new_png_800 = \Core::ROOT . '/tmp/png_' . $id . '_800.png';

		$output = array();
		$return_var = NULL;
		exec('inkscape --export-text-to-path --export-pdf=' . $new_pdf . ' ' . $starting_svg, $output, $return_var);
		exec('inkscape --export-plain-svg=' . $new_svg . ' ' . $new_pdf, $output, $return_var);
		exec('inkscape -h800 --export-png=' . $new_png_800 . ' ' . $new_svg, $output, $return_var);
		exec('inkscape -h400 --export-png=' . $new_png_400 . ' ' . $new_svg, $output, $return_var);
		exec('inkscape -h200 --export-png=' . $new_png_200 . ' ' . $new_svg, $output, $return_var);
		exec('inkscape -h100 --export-png=' . $new_png_100 . ' ' . $new_svg, $output, $return_var);

		return 'done';
	}

	private static function calculateTextWidth($text) {
		return array_sum(array_map(function ($letter) {
			switch($letter) {
				# these widths are dependent on the font-size. For reference, 16,57,41 are for 110px font
				case 'I':
				case ' ':
					return 16;
					break;
				case 'M':
				case 'W':
					return 57;
					break;
				default:
					return 41;
					break;
			}
		}, str_split($text)));
	}
}