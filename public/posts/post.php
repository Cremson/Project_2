<?php
$link = mysqli_connect("localhost", "root", "", "test");

$img = mysqli_query($link, "SELECT * FROM `images`");

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
    <?php
    while($result = mysqli_fetch_assoc($img))
    {?>
        <img src="../img/<?php echo $result['image'] ?>.jpg" width="200"  alt="">
    <?php } ?>
</div>

    <footer>
        <?php require("../footer/footer.php") ?>
    </footer>


</body>
</html>