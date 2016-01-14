<?php
namespace Controllers;

class LockupsController extends Controller {
	static public function createAction() {
		\Core::$breadcrumbs[] = array('text' => 'Create Lockup');

		$context = new \stdClass;
		return self::renderView('new_lockup', $context);
	}
}