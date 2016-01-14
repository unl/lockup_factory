<?php
namespace Controllers;

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
		$lockup->org_width = array_sum(array_map(function ($letter) {
			switch($letter) {
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
		}, str_split($lockup->org_name)));
		$lockup->width = 152 + 62 + $lockup->org_width + 31;

		$svg_text = self::createLockup('org_only', $lockup);


		return $svg_text;
	}

	private static function createLockup($template, $lockup) {
		ob_start();
		include self::$lockup_templates_directory . '/' . $template . '.tpl.php';
		return ob_get_clean();
	}
}