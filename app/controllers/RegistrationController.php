<?php

namespace app\controllers;

use app\models\User;
use oop\core\Base\View;

class RegistrationController extends AppController
{
    public function regAction()
    {
        if(!empty($_POST))
        {
            $user = new User;
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique())
            {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if($user->save('user'))
            {
                $_SESSION['success'] = 'Вы успешно зарегистрированы';
            }
            else
            {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже';
            }
            redirect("/Authorization/login");

        }
        View::setMeta('Регистрация');
    }
}