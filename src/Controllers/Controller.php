<?php
namespace Controllers;

class Controller {
	public static $views_directory = __DIR__ . '/../Views';

	public static function renderView($view, \stdClass $context) {
		ob_start();
		include self::$views_directory . '/' . $view . '.php';
		return ob_get_clean();
	}
}