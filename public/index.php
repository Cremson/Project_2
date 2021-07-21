<?php

use vendor\core\Router;

 $query = rtrim($_SERVER['QUERY_STRING'], '/');

 define('WWW', __DIR__);
 define('CORE', dirname(__DIR__) . '/vendor/core');
 define('ROOT', dirname(__DIR__));
 define('APP', dirname(__DIR__) . '/app');
 define('LAYOUT', 'default');


require '../vendor/libs/functions.php';

spl_autoload_register(function ($class)
{
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_file($file))
    {
        require_once $file;
    }
});

Router::add('^page/(?P<allias>[a-z-]+)$', ['controller' => 'PostsController', 'action' => 'index']);

//default roots
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');



Router::dispatch($query);

