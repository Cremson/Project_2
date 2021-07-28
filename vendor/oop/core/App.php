<?php

namespace oop\core;

use oop\core\Registry;

class App
{
    
    public static $app;
    
    public function __construct()
    {
        session_start();
        self::$app = Registry::instance();

    }
    
}
