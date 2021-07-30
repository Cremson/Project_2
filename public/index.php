<?php

use oop\core\Router;


$query = rtrim($_SERVER['QUERY_STRING'], '/');


define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/oop/core');
define('ROOT', dirname(__DIR__));
define('LIBS', dirname(__DIR__) . '/vendor/oop/libs');
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');

require '../vendor/oop/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';


new \oop\core\App;

// defaults routs

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


Router::dispatch($query);