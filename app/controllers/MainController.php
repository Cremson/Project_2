<?php

namespace app\controllers;


use app\models\Main;
use oop\core\Base\View;


class MainController extends AppController
{
    public function indexAction()
    {
        if(isset($_SESSION['user']))
        {
            $model = new Main;
            $user = \R::findOne('user');
            $this->set(compact( 'user'));
        }
        View::setMeta('Главная');
    }

}