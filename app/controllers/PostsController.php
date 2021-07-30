<?php

namespace app\controllers;

use app\models\Main;
use oop\core\Base\View;

class PostsController extends AppController
{
    public function postAction()
    {
        if(isset($_SESSION['user']))
        {
            $model = new Main;
            $user = \R::findOne('user');
            $img = \R::findAll('img');
            $this->set(compact( 'user', 'img'));

        }
        else
        {
            $model = new Main;
            $img = \R::findAll('img');
            $this->set(compact( 'img'));
        }


        View::setMeta('Список постов');
    }
}
