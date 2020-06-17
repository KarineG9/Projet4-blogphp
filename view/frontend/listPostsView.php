<?php

$title = 'Blog officiel de Jean Forteroche'; ?>

<?php ob_start(); ?>


<h1 class="title-h1 mt-5">~ Billet simple pour l'Alaska ~</h1>
<h2 class="title-chap">Ensemble des chapitres</h2>
<div class="container">
    <div class="col-lg-12">
        <div id="synopsis">
            <h3>
                <center>Résumé</center>
                <hr>
            </h3><br>
            <p>Afin de faire le point sur sa vie, Jade prévoit de s'exiler quelques mois en Alaska. Elle va bientôt
                faire la rencontre d'une créature de sang froid, mais pourtant si humaine. Elle sera prête à tout
                pour
                découvrir l'identité de cet être étrange.</p>
            <p>Bonne lecture.</p>
        </div>
    </div>
</div>

<?php
while ($element = $posts->fetch(PDO::FETCH_ASSOC)) {


?>

    <div class="container">
        <div class="col-lg-12">

            <article class="news">
                <h3 class="title-listpost">
                    <p><?= htmlspecialchars($element['title']); ?>
                        <em>le <?= $element['creation_date_fr']; ?></em>
                    </p>
                </h3>


                <div class="content-listpost">
                    <p>
                        <?= nl2br(substr($element['content'], 0, 300)); ?>
                    </p>
                    <br />
                    <em><a href="index.php?action=post&amp;id=<?= $element['id'] ?>">Lire la suite</a></em>
                </div>
            </article>
        </div>
    </div>

<?php
}
$posts->closeCursor();

?>
<?php $content = ob_get_clean(); ?>

<?php require('templateFront.php'); ?>