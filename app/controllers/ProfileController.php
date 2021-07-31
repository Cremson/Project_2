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
            $findPassword->password = password_hash($data['password'], PASSWORD_DEFAULT);
            \R::store($findPassword);
        }
        if ( isset($data['change_avatar']))
        {
            $findAvatar = \R::findOne('user', 'id = ?', [$id]);
            $ava = $_FILES['avatar']['name'];
            $avaTmp = $_FILES['avatar']['tmp_name'];
            $path = "uploads/" . $ava;
            $findAvatar->avatar = $ava;
            if (move_uploaded_file($avaTmp, $path))
            {

            }
            \R::store($findAvatar);


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