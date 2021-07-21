<?php

namespace app\controllers;
use app\models\Main;


class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Main;
//      $res = $model->query("CREATE TABLE posts SELECT * FROM");
    }

}