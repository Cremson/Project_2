
<div class="page">
    <img src="/public/img/<?php print_r($_SESSION['user']['avatar'])?>.jpg" width="100" height="100"  alt="">

    <div class="reg--php">
        <form action="/Profile/profile" method="post" enctype="multipart/form-data">
            <label>Имя</label>
            <input type="text" name="name" placeholder="Введите новое имя">
            <button type="submit" name="change_name">Изменить данные</button>
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите новый логин">
            <button type="submit" name="change_login">Изменить данные</button>
            <label>Адрес почты</label>
            <input type="text" name="email" placeholder="Введите новый адрес электронной почты">
            <button type="submit" name="change_email">Изменить данные</button>
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите новый пароль">
            <button type="submit" name="change_password">Изменить данные</button>
            <label>Изображение профиля</label>
            <input type="file" name="avatar" placeholder="Загрузите изображение профиля">
            <button type="submit" name="change_avatar">Изменить данные</button>

        </form>
    </div>
</div>



