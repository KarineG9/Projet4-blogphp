<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-8">
            <div id="container-login">
                <form id="loginform" action="index.php?action=homeAdmin" method="POST">
                    <h1 class="title-login">Connexion</h1>

                    <input type="text" placeholder="Nom d'utilisateur" name="username" value="username" class="form-control" required>
                    <br />


                    <input type="password" placeholder="Entrer le mot de passe" name="pass" value="pass" class="form-control" required>

                    <br>
                    <button type="submit" name="action" class="button2">Valider</button>
                    <span style="color:black"><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : NULL; ?></span>
                    <br>
                </form>

            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateFront.php'); ?>