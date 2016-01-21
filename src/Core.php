<?php

class Core {
	public static $breadcrumbs = array(
		array("href" => "http://www.unl.edu", "text" => 'UNL'),
		array("href" => '/', "text" => "UNL Lockup Factory")
	);
	const ROOT = __DIR__ . '/..';

	public static function callController($controller, $action, $params = NULL) {
		$controller_name = 'Controllers\\' . ucfirst($controller) . 'Controller';
		$action_name = $action . 'Action';

		# if that controller exists and it has that method, call it
		$controller_filename = __DIR__ . '/' . str_replace(array('_', '\\'), '/', $controller_name) . '.php';
		if (file_exists($controller_filename) && is_callable($controller_name.'::'.$action_name)) {
			$controller_output = call_user_func($controller_name.'::'.$action_name, $params);
			self::renderPage($controller_output);
		} else {
			# need to 404
			echo 'not a thing';
		}
	}

	public static function renderPage($main_content) {
		include __DIR__ . '/Views/main_template.php';
	}


	# redirect to a URL
	public static function redirect($url, $exit = TRUE) {
		header('Location: ' . $url);
        if (!defined('CLI') && FALSE !== $exit) {
            exit($exit);
        }
	}

	# redirect back to where the user came from
	public static function redirectBack($exit = TRUE) {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
        if (!defined('CLI') && FALSE !== $exit) {
            exit($exit);
        }
	}

	# get flash notice information
	public static function getNotice()
    {
        if (isset($_SESSION['flash_notice'])) {
            $notice = $_SESSION['flash_notice'];
            unset($_SESSION['flash_notice']);
            return $notice;
        } else {
            return NULL;
        }
    }

    public static function getGenerateOutput()
    {
    	if (isset($_SESSION['generate_output'])) {
            $notice = $_SESSION['generate_output'];
            unset($_SESSION['generate_output']);
            return $notice;
        } else {
            return NULL;
        }
    }
}