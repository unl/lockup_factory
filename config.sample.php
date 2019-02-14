<?php

global $ENV;
$ENV = 'production';

// Set your project lives in a sub-folder of your web root
//$routerBase = '/unl_lockup_factory/public/';

# standard autoloader
function autoload($class)
{
    $class = str_replace(array('_', '\\'), '/', $class);
    include $class . '.php';
}
spl_autoload_register('autoload');

# our projects' include paths (these will be added to by composer)
set_include_path(
    __DIR__ . '/src'
);

# the composer autoloader
require __DIR__ . '/vendor/composer/autoload.php';

# do this stuff
ini_set('display_errors', true);
error_reporting(E_ALL);

# load the database here
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory(__DIR__ . '/src/Models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:admin@localhost/lockups'
    ));
});

