<?php ob_start(); ?>


<div class="container">
    <p>Bienvenue dans l'univers de Jean Forteroche</p>
    <a href="bio.php"><button class="btn-bio" type="submit">Biographie</button></a>
    <br />
    <p>Découvrez mon nouveau roman : Billet simple pour l'Alaska</p>
    <a href="#chapitres"><button class="btn-chapitre" type="submit">Chapitres</button></a>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>