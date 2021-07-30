<?php

namespace app\controllers;

use app\models\Main;

use oop\core\Base\View;

class ProfileController extends AppController
{
    public function profileAction()
    {
        if(isset($_SESSION['user']))
        {

            $model = new Main;
            $user = \R::findOne('user');
            $this->set(compact( 'user'));
        }
        else
        {
            unset($_SESSION);
        }

        View::setMeta('Профиль');
    }


    public function logoutAction()
    {
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/Authorization/login');


        View::setMeta('Профиль');
    }

}