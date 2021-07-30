<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/css/style.css">
        <?php \oop\core\base\View::getMeta() ?>
        <title>Главная</title>
    </head>
<body>
<header>
    <div class="grid">
        <div class="grid-item"> <?php require 'header/header.php'?> </div>
        <div class="grid-item"> <?php require 'nav/nav.php'?> </div>
    </div>
</header>
<div class="page">

    <?php

    if(isset($_SESSION['error'])):?>
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['error']; unset($_SESSION['error'])?>
        </div>
    <?php endif; ?>

    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success" role="alert">
            <?=$_SESSION['success']; unset($_SESSION['success'])?>
        </div>
    <?php endif; ?>

    <?=$content ?>
</div>


<footer>
    <footer>
        <?php require 'footer/footer.php'?>
    </footer>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>