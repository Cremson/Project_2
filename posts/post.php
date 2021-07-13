<?php
require("pic.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список постов</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<header>
    <?php require("../header/header.html") ?>
</header>
<div class="page">
    <?php foreach ($img as $pic =>$sic)
    {?>
    <img src="../img/<?php echo $sic ?>.jpg" width="200" alt="">
    <?php } ?>
</div>

    <footer>
        <?php require("../footer/footer.html") ?>
    </footer>


</body>
</html>