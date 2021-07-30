
<?php if (!empty($img)): ?>
        <?php foreach ($img as $pic): ?>
            <img src="/public/img/<?php echo $pic['image'] ?>.jpg" width="300" height="300" alt="">
        <?php endforeach; ?>
    <?php endif; ?>

