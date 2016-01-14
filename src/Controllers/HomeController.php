<?php
namespace Controllers;

class HomeController extends Controller {
	static public function viewAction() {
		$context = new \stdClass;
		$context->answer = 2+2;

		return self::renderView('home', $context);
	}
}