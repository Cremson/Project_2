<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/public/css/style.css">

</head>
<body>
<header>
    <?php require("../header/header.php") ?>
</header>
<div class="page">
    <div class="reg--php">
        <form action="" method="">
            <label>Логин</label>
            <input type="text" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="password" placeholder="Введите пароль">
            <button>Войти</button>
            <p>
                Еще нет аккаунта - <a class="but" href="../registration/reg.php">Зарегистрируйтесь !</a>
            </p>
        </form>

    </div>
</div>


<footer>
    <?php require("../footer/footer.php") ?>
</footer>
</body>
</html>