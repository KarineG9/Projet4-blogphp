<?php

require_once('controller/ControllerBack.php');
?>


<?php ob_start(); ?>
<div class="container admin">
    <div class="row">
        <div class="col-lg-12">

            <p>Vous allez vous déconnecter.</p>
            <form class="form-horizontal" action="index.php" method="POST">

                <button class="btn btn-outline-warning" type="submit">Oui</button>
                <input type="hidden" name="action" value="unlogSubmit">
                <a class="btn btn-light" href="index.php?action=homeAdmin">Non</a>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>