<?php

require_once('controller/ControllerBack.php');

?>

<?php ob_start(); ?>
<div class="container admin mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h1 class="titleadmin">Modifier un article </h1>
                <br>
                <div class='listItem'>

                    <?php
                    $item = $seeItem->fetch(PDO::FETCH_ASSOC);

                    ?>
                    <form class="form" role="form" action='updateSubmit' method="POST">
                        <input type="hidden" id="id" name="id" value="<?php echo $item['id'] ?>" />
                        <label>Auteur</label>
                        <input type="text" class="form-control" id="author_id" name="author_post" placeholder=""
                            value="<?php echo $item['author_post']; ?>" />
                        <label>Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder=""
                            value="<?php echo $item['title']; ?>" />
                        <label>Contenu</label>
                        <textarea type="text" class="form-control" id="wysiwyg" name="content" rows="5" cols="33"
                            placeholder=""><?php echo $item['content']; ?></textarea>

                </div>
                <br>
                <button type="submit" class="btn btn-outline-success" value="action" name="action">Modifier</button>
                <br>
                <a class="btn btn-outline-primary" href="homeAdmin">Retour aux articles</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>