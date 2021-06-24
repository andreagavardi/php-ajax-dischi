<div class="albums">
    <?php foreach ($dischi as $album) { ?>

        <div class="album">
            <img src="<?= $album['poster'] ?>" alt="">
            <div class="details">
                <h2><?= $album['title'] ?></h2>
                <div><?= $album['author'] ?> <br> <?= $album['year'] ?></div>
            </div>
        </div>
    <?php } ?>
</div>