<?php

namespace app\controllers;

use app\models\Main;

use oop\core\Base\View;

class PostsController extends AppController
{
    public function postAction()
    {
        $model = new Main;
        $img = \R::findAll('img');
        $this->set(compact( 'img'));
        View::setMeta('Список постов');

    }



}
