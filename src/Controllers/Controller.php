<?php
namespace Controllers;
use Auth;
use Models\ScriptState as ScriptState;

class Controller {
	public static $views_directory = __DIR__ . '/../Views';

	const NOTICE_LEVEL_SUCCESS = 'success';
    const NOTICE_LEVEL_INFO = 'info';
    const NOTICE_LEVEL_ERROR = 'failure';
    const NOTICE_LEVEL_ALERT = 'alert';

	public static function renderView($view, \stdClass $context) {
        $context->scriptState = new ScriptState;
        $context->baseURL = "/";
        if (isset($GLOBALS['routerBase']) && !empty($GLOBALS['routerBase'])) {
            $context->baseURL = $GLOBALS['routerBase'];
        }
		ob_start();
		include self::$views_directory . '/' . $view . '.php';
		return new ControllerOutput(ob_get_clean(), $context);
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
        \Auth::authenticate();
    }
}

class ControllerOutput {
    private $baseURL = "/";
    private $content;
    private $scriptState;

    public function __construct($content, $context)
    {
        // set base url from index.php global scope
        if (isset($GLOBALS['routerBase']) && !empty($GLOBALS['routerBase'])) {
            $this->baseURL = $GLOBALS['routerBase'];
        }
        $this->content = $content;
        if (!empty($context->scriptState) && $context->scriptState instanceof ScriptState) {
            $this->scriptState = $context->scriptState;
        }
    }

    public function getBaseURL() {
        return $this->baseURL;
    }

    public function getContent() {
        return $this->content;
    }

    public function getScriptState() {
        return $this->scriptState;
    }
}