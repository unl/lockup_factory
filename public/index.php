<?php

$config_file = __DIR__ . '/../config.sample.php';

if (file_exists(__DIR__ . '/../config.inc.php')) {
    $config_file = __DIR__ . '/../config.inc.php';
}
require_once $config_file;

require_once __DIR__ . '/../vendor/composer/autoload.php';

session_start();

# initialize auth things
\Auth::setUpClient();
\Auth::singleLogOut();
\Auth::autoLogin();
\Auth::setUser();

$router = new AltoRouter();
if (isset($routerBase) && !empty($routerBase)) {
    $router->setBasePath($routerBase);
}

if (isset($siteNotice)) {
    \Core::$siteNotice = $siteNotice;
}

$router->map('GET', '/?', function() {
    \Core::callController('home', 'view');
});
$router->map('GET', '/logout/?', function() {
    \Auth::logout();
});
$router->map('GET', '/[a:controller]/[a:action]/?', function($controller, $action) {
    \Core::callController($controller, $action, array_merge(array(), $_GET));
});
$router->map('GET', '/[a:controller]/[a:action]/[**:trailing]', function($controller, $action, $trailing) {
    # convert "trailing" into an array of params
    $params = array();
    $key = NULL;
    $even = TRUE;

    $array = explode('/', $trailing);
    for ($i = 0; $i < count($array); $i++) {
        if ($even) {
            $key = $array[$i];
        } else {
            $params[$key] = $array[$i];
        }
        $even = !$even;
    }

    \Core::callController($controller, $action, array_merge($_GET, $params));
});
$router->map('POST', '/[a:controller]/[a:action]/?', function($controller, $action) {
    \Core::callController($controller, 'post' . ucfirst($action), $_POST);
});
$router->map('POST', '/[a:controller]/[a:action]/[**:trailing]', function($controller, $action, $trailing) {
    \Core::callController($controller, 'post' . ucfirst($action), $_POST);
});

$match = $router->match();

# call closure or throw 404 status
if($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    # no route was matched
    echo '404 on match';
    exit;
}

