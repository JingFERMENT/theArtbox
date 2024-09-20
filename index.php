<?php
require_once(__DIR__ .'../oeuvres.php');
include __DIR__ . '../header.php'; ?>

<main>
<div id="liste-oeuvres">
    <?php foreach ($oeuvres as $oeuvre) { ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
                <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['title'] ?>">
                <h2><?= $oeuvre['title'] ?></h2>
                <p class="description"><?= $oeuvre['artist'] ?></p>
            </a>
        </article>
    <?php } ?>
</div>
</main>

<?php include __DIR__ . '../footer.php'; ?>