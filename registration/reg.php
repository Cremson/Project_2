<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Регистрация</title>

    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
<div class="page">
    <header>
        <?php require("../header/header.html") ?>
    </header>
    <div class="reg--php">
        <form action="" method="">
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
    <?php require("../footer/footer.html") ?>
</footer>
</body>
</html>