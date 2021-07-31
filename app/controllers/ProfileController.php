<?php

namespace app\controllers;

use app\models\Main;
use oop\core\Base\View;

class ProfileController extends AppController
{
    public function profileAction()
    {
        $model = new Main;
        $id = $_SESSION['user']['id'];
        $data = $_POST;

        if ( isset($data['change_name']))
        {
            $findName = \R::findOne('user', 'id = ?', [$id]);
            $findName->name = $data['name'] ;
            \R::store($findName);
        }

        if ( isset($data['change_login']))
        {
          $findLogin = \R::findOne('user', 'id = ?', [$id]);
            $findLogin->login = $data['login'] ;
          \R::store($findLogin);
        }
        if ( isset($data['change_email']))
        {
            $findEmail = \R::findOne('user', 'id = ?', [$id]);
            $findEmail->email = $data['email'] ;
            \R::store($findEmail);
        }
        if ( isset($data['change_password']))
        {
            $findPassword = \R::findOne('user', 'id = ?', [$id]);
            $findPassword->password = $data['password'] ;
            \R::store($findPassword);
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