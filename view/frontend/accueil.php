<?php ob_start(); ?>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container-accueil">
                <p>Bienvenue dans l'univers de Jean Forteroche</p>
                <a href="index.php?action=biographie"><button class="btn-bio" type="submit">Biographie</button></a>
                <br />
                <p>Découvrez mon nouveau roman : Billet simple pour l'Alaska</p>
                <a href="index.php?action=listPosts"><button class="btn-chapitre" type="submit">Chapitres</button></a>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateFront.php'); ?>