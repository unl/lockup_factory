<?php
namespace Controllers;
use Auth;

class Controller {
	public static $views_directory = __DIR__ . '/../Views';

	const NOTICE_LEVEL_SUCCESS = 'success';
    const NOTICE_LEVEL_INFO = 'info';
    const NOTICE_LEVEL_ERROR = 'failure';
    const NOTICE_LEVEL_ALERT = 'alert';

	public static function renderView($view, \stdClass $context) {
		ob_start();
		include self::$views_directory . '/' . $view . '.php';
		return ob_get_clean();
	}

	public static function flashNotice($level, $header, $message)
    {
    	$_SESSION['flash_notice'] = array(
    		'level' => $level,
    		'header' => $header,
    		'messageHTML' => $message
    	);
    }

    public static function storeGenerateOutput($message) {
        $_SESSION['generate_output'] = $message;
    }

    public static function requireAuth() {
        $auth = new Auth;
        $auth->authenticate();
    }
}