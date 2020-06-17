<?php
require_once('controller/ControllerBack.php');

?>


<?php ob_start(); ?>
<div class="container admin mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h1 class="titleadmin">Supprimer un article </h1>
                <br>
                <div class="container admin">
                    <div class="row">
                        <form class="form-horizontal" role="form" action="index.php?action=deleteComSubmit"
                            method="POST">
                            <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
                            <p class="alert alert-danger">Confirmez-vous la suppression ?</p>
                            <br />
                            <div class="form-actions">
                                <button type="submit" name="action" value="action" class="btn btn-danger">Oui</button>
                                <a class="btn btn-light" href="commentAdmin">Non</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>