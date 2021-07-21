<?php
require("../../app/models/pic.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список постов</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<header>
    <?php require("../header/header.php") ?>
</header>
<div class="page">
    <?php foreach ($img as $pic =>$sic)
    {?>
        <img src="../img/<?php echo $sic ?>.jpg" width="400" height="400"  alt="">
    <?php } ?>
</div>

    <footer>
        <?php require("../footer/footer.php") ?>
    </footer>


</body>
</html>