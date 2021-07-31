
<div class="page">
    <?php if (isset($_SESSION['user']['avatar']))
    {
        ?>
        <img src="/public/uploads/<?php print_r($_SESSION['user']['avatar'])?>" width="100" height="150"  alt="">
        <?php
    }
        ?>


    <div class="reg--php">
        <form action="/Profile/profile" method="post" enctype="multipart/form-data">
            <label>Текущее имя : <?php print_r($_SESSION['user']['name'])?></label>
            <label>Имя</label>
            <input type="text" name="name" placeholder="Введите новое имя">
            <button type="submit" name="change_name">Изменить имя</button>
            <label>Текущий логин : <?php print_r($_SESSION['user']['login'])?></label>
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите новый логин">
            <button type="submit" name="change_login">Изменить логин</button>
            <label>Текущий email : <?php print_r($_SESSION['user']['email'])?></label>
            <label>Адрес почты</label>
            <input type="text" name="email" placeholder="Введите новый адрес электронной почты">
            <button type="submit" name="change_email">Изменить email</button>
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите новый пароль">
            <button type="submit" name="change_password">Изменить пароль</button>
            <label>Изображение профиля</label>
            <input type="file" name="avatar" placeholder="Загрузите изображение профиля">
            <button type="submit" name="change_avatar">Изменить аватар</button>

        </form>
    </div>
</div>



