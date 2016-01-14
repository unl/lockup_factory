<?php

function autoload($class)
{
    $class = str_replace(array('_', '\\'), '/', $class);
    include $class . '.php';
}

require __DIR__ . '/vendor/composer/autoload.php';
spl_autoload_register('autoload');

set_include_path(
    __DIR__ . '/src'
);

ini_set('display_errors', true);
error_reporting(E_ALL);

# load the database here
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory(__DIR__ . '/src/Models');
    $cfg->set_connections(array(
        'development' => 'mysql::lockups:lockups@localhost/lockups'
    ));
});