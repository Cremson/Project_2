<?php


namespace app\controllers;

use app\models\User;
use app\models\Main;
use oop\core\Base\View;

class AuthorizationController extends AppController
{
    public function loginAction()
    {
        if(!empty($_POST))
        {
            $user = new User();
            if($user->login())
            {
                $_SESSION['success'] = 'Вы успешно авторизованы';
            }
            else
            {
                $_SESSION['error'] = 'Логин или пароль введены неверно';
            }
            redirect("/Profile/profile");
        }
        View::setMeta('Авторизация');
    }


}