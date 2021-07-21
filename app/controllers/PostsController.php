<?php

namespace app\controllers;

use app\models\Main;

class PostsController extends AppController
{
    public function indexAction()
    {
        $model = new Main;
        $res = $model->query("CREATE TABLE posts SELECT * FROM img");
        var_dump($res);
    }

}