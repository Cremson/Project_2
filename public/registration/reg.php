<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Регистрация</title>

    <link rel="stylesheet" href="/public/css/style.css">

</head>
<body>
<header>
    <?php require("../header/header.php") ?>
</header>
<div class="page">

    <div class="reg--php">
        <form action="../../app/models/pic.php" method="post" enctype="multipart/form-data">
            <label>Имя</label>
            <input type="text" placeholder="Введите свое имя">
            <label>Введите свой логин</label>
            <input type="text" placeholder="Введите логин">
            <label>Введите адрес своей почты</label>
            <input type="email" placeholder="Введите адрес своей почты">
            <label>Изображение профиля</label>
            <input type="file">
            <label>Введите пароль</label>
            <input type="password" placeholder="Введите пароль">
            <label>Подтвердите пароль</label>
            <input type="password" placeholder="Подтвердите пароль">
            <button>Зарегистрироваться</button>
            <p>
                 Уже есть аккаунт - <a class="but" href="../login/auth.php">Авторизируйтесь !</a>
            </p>
        </form>
    </div>
</div>



<footer>
    <?php require("../footer/footer.php") ?>
</footer>
</body>
</html>