<?php

namespace oop\core\Base;

use oop\core\Db;
use Valitron\Validator;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $table_user;
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        $this->pdo = Db::instance();
    }

    public function load($data)
    {
        foreach($this->attributes as $name => $value)
        {
            if(isset($data[$name]))
            {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function validate($data)
    {
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if($v->validate()){
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    public function save($table_user)
    {
        $tbl = \R::dispense($table_user);
        foreach($this->attributes as $name => $value)
        {
            $tbl->$name = $value;
        }
        return \R::store($tbl);
    }

    public function getErrors()
    {
        $errors = '<ul>';
        foreach($this->errors as $error)
        {
            foreach($error as $item)
            {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }

    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }









//    public function load($data)
//    {
//        foreach($this->attributes as $name => $value)
//        {
//            if(isset($data[$name]))
//            {
//                $this->attributes[$name] = $data[$name];
//            }
//        }
//    }
//    public function validate($data)
//    {
//        $v = new Validator($data);
//        $v->rules($this->rules);
//        if($v->validate())
//        {
//            return true;
//        }
//        $this->errors = $v->errors();
//        return false;
//    }
//    public function save($table_user)
//    {
//        $tbl = \R::dispense($table_user);
//        foreach($this->attributes as $name => $value)
//        {
//            $tbl->$name = $value;
//        }
//        return \R::store($tbl);
//    }
//
//    public function getErrors()
//    {
//        $errors = '<ul>';
//        foreach($this->errors as $error)
//        {
//            foreach($error as $item){
//                $errors .= "<li>$item</li>";
//            }
//        }
//        $errors .= '</ul>';
//        $_SESSION['error'] = $errors;
//    }
//
//
//
//    public function __construct()
//    {
//        $this->pdo = Db::instance();
//    }
//    public function query($sql)
//    {
//        return $this->pdo->execute($sql);
//    }
//    public function findAll()
//    {
//        $sql = "SELECT * FROM {$this->table}";
//        return $this->pdo->query($sql);
//    }

}
