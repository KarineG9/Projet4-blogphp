<?php

require_once('controller/ControllerBack.php');

?>

<?php ob_start(); ?>

<div class="container admin">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h1 class="titleadmin">Créer un article </h1>
                <br>
                <div class='listItem'>
                    <form class="form" role="form" action='index.php?action=createSubmit' method="POST">
                        <label for="author">Auteur</label>
                        <input type="text" class="form-control" id="author_id" name="author_post" placeholder="">
                        <label for="author">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="">
                        <label for="author">Contenu</label>
                        <textarea type="text" class="form-control" id="wysiwyg" name="content" rows="5" cols="33"
                            placeholder=""></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-success" name="action">Ajouter</button>
                <br>
                <a class="btn btn-outline-primary" href="index.php?action=homeAdmin">Retour aux articles</a>
                </form>

            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>