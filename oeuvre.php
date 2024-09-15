<?php
require_once(__DIR__ . '../oeuvres.php');
include __DIR__ . '../header.php'; ?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <?php foreach ($oeuvres as $oeuvre) {
            if ($_GET['id'] === $oeuvre['id']) { ?>
                <img src="<?= $oeuvre['image'] ?>" alt="Dodomu">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $oeuvre['title'] ?></h1>
        <p class="description"><?= $oeuvre['artist'] ?></p>
        <p class="description-complete">
            <?= $oeuvre['description'] ?>
        </p>
    </div>
<?php }
        } ?>
</article>

<?php include __DIR__ . '../footer.php'; ?>