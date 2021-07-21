<?php require("../../app/models/pic.php");
?>

<div class="page">
    <?php foreach ($img as $pic =>$sic)
    {?>
        <img src="../img/<?php echo $sic ?>.jpg" width="400" height="400"  alt="">
    <?php } ?>
</div>
