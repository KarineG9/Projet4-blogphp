<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Blog officiel de Jean Forteroche</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="icon" href="public/css/images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-body">
        <header>
            <nav class="navbar navbar-expand-md bg-custom">
                <a class="navbar-brand" href="home">Jean Forteroche</a>
                <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                    data-target="#responsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="responsive">

                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="biographie">BIOGRAPHIE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listPosts">ROMANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <?= $content ?>


        <footer>
            <div id="plansite">
                <h3>Plan du site</h3>
                <p><a href="home">Acceuil</a></p>
                <p><a href="biographie">Biographie</a></p>
                <p><a href="listPosts">Romans</a></p>
                <p><a href="contact">Contact</a></p>
            </div>
            <div id="Media">
                <h3>Tu peux me suivre ici...</h3>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
            </div>
            <div id="Admin">
                <h3>Admin</h3>
                <?php
                if (!empty($_SESSION['username'])) {
                    echo '<p><a href="homeAdmin">Administration</a></p>';
                } else {
                    echo  '<p><a href="connexion">Connexion</a></p>';
                }
                ?>
            </div>
        </footer>
    </div>

</body>

</html>