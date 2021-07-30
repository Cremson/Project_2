
<div class="page">
    <img src="/public/img/<?php print_r($_SESSION['user']['avatar'])?>.jpg" width="200"  alt="">

    <div class="reg--php">
        <form action="/Profile/profile" method="post" enctype="multipart/form-data">
            <label>Имя</label>
            <input type="text" name="name" placeholder="Введите новое имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите новый логин">
            <label>Адрес почты</label>
            <input type="text" name="email" placeholder="Введите новый адрес электронной почты">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите новый пароль">
            <label>Изображение профиля</label>
            <input type="file" name="password" placeholder="Загрузите изображение профиля">

            <button type="submit">Изменить данные</button>

        </form>
    </div>
</div>



