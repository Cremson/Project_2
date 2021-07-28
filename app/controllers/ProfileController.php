<?php


namespace app\controllers;


use oop\core\Base\View;

class ProfileController extends AppController
{
    public function profileAction()
    {


    }
    public function logoutAction()
    {
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/Authorization/login');


        View::setMeta('Профиль');
    }

}