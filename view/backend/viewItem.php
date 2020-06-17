<?php

require_once('controller/ControllerBack.php');
?>

<?php ob_start(); ?>
<div class="container admin mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h1 class="titleadmin">Vue de l'article</h1>
                <br>
                <div class='listItem'>
                    <?php
                    $item = $seeItem->fetch(PDO::FETCH_ASSOC);

                    ?>
                    <label>Auteur</label><?php echo ' ' . $item['author_post']; ?>
                    <label>Titre</label><?php echo ' ' . $item['title']; ?>
                    <label>Contenu</label><?php echo ' ' . $item['content']; ?>
                    <label>Date</label><?php echo ' ' . $item['creation_date']; ?>
                </div>
                <br>
                <a class="btn btn-outline-primary" href="homeAdmin">Retour aux articles</a>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>