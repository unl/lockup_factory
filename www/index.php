<?php

$config_file = __DIR__ . '/../config.sample.php';

if (file_exists(__DIR__ . '/../config.inc.php')) {
    $config_file = __DIR__ . '/../config.inc.php';
}
require_once $config_file;

require_once __DIR__ . '/../vendor/composer/autoload.php';

$router = new AltoRouter();
$router->map('GET', '/?', function() {
	\Core::callController('home', 'view');
});
$router->map('GET', '/[a:controller]/[a:action]/?', function($controller, $action) {
	\Core::callController($controller, $action);
});

$match = $router->match();

# call closure or throw 404 status
if($match && is_callable($match['target'])) {
	call_user_func_array($match['target'], $match['params']); 
} else {
	# no route was matched
}

