<?php ob_start(); ?>
<div class="container">
    <div class="row my-5">
        <div id="container-login">
            <div class="mx-auto p-5">

                <h1 class="title-login">Connexion</h1>
                <form id="loginform" action="homeAdmin" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Nom d'utilisateur" name="username" value="username"
                                class="form-control" required>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <input type="password" placeholder="Entrer le mot de passe" name="pass" value="pass"
                                class="form-control" required>
                        </div>
                        <br>
                        <div class="col text-center">
                            <button type="submit" name="action" class="button2">Valider</button>
                            <span
                                style="color:black"><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : NULL; ?></span>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateFront.php'); ?>