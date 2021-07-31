<?php

namespace app\controllers;



use oop\core\Base\View;


class MainController extends AppController
{
    public function indexAction()
    {

        View::setMeta('Главная');
    }

}