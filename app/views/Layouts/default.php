<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/css/style.css">
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
    <?=$content ?>
</div>


<footer>
    <footer>
        <?php require 'footer/footer.php'?>
    </footer>
</footer>
</body>

</html>