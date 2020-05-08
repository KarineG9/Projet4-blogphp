<?php

$title = 'Blog officiel de Jean Forteroche'; ?>

<?php ob_start(); ?>


<h1 class=title-h1>~ Billet simple pour l'Alaska ~</h1>
<h2 class="title-chap">Chapitres </h2>


<?php
while ($element = $posts->fetch(PDO::FETCH_ASSOC)) {


?>

<div class="container">
    <div class="col-lg-12">
        <article class="news">
            <h3 class="title-post">
                <?php htmlspecialchars($element['title']); ?>

                <em>le <?= $element['creation_date_fr']; ?></em>
            </h3>

            <p class="content-post">
                <?= nl2br(htmlspecialchars($element['content']));
                    ?>
                <br />
                <em><a href="index.php?action=post&amp;id=<?= $element['id'] ?>">Lire la suite</a></em>
            </p>
        </article>
    </div>
</div>
<?php
}
$posts->closeCursor();

?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>