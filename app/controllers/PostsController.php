<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\Base\Model;

class PostsController extends AppController
{
    public function postAction()
    {
        $model = new Main;
        $img = $model->findAll();
        $this->set(compact( 'img'));

    }


}
