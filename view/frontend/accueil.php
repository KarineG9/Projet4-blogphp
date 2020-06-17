<?php ob_start(); ?>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container-accueil mt-5 mb-5">
                <p>Bienvenue dans l'univers de Jean Forteroche</p>
                <a class="btn btn-light" href="biographie" role="button">Biographie</a>
                <p>Découvrez mon nouveau roman : Billet simple pour l'Alaska</p>
                <a class="btn btn-light" href="listPosts" role="button">Chapitre</a>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateFront.php'); ?>