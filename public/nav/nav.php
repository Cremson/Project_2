
<div class="main-inner">
    <a class="nav-main" href="/posts/post">Список постов</a>
    <?php
    if(!isset($_SESSION['user']))
    { ?>
        <a class="nav-main" href="/registration/reg">Регистрация</a>
        <a class="nav-main" href="/Authorization/login">Авторизация</a>
    <?php }
    else
    { ?>
        <?php echo($user['login']); ?>
        <a class="nav-main" href="/Profile/profile">Профиль</a>
        <a class="nav-main" href="/Profile/logout"> Выход</a>
 <?php
    }
    ?>



</div>
