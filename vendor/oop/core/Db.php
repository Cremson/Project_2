<?php

namespace oop\core;

class db
{
    use TSingletone;

    protected $pdo;

    public static $countSql = 0;
    public static $queries = [];

    protected function __construct() {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . '/rb.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        \R::freeze(true);
    }
//    public static function instance()
//    {
//        if (self::$instance === null)
//        {
//            self::$instance = new self;
//        }
//        return self::$instance;
//    }
//    public function execute($sql)
//    {
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute();
//    }
//    public function query($sql)
//    {
//        $stmt = $this->pdo->prepare($sql);
//        $res = $stmt->execute();
//        if ($res !== false)
//        {
//            return $stmt->fetchAll();
//        }
//        return [];
//    }
}