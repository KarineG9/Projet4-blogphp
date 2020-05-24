<!DOCTYPE html>
<html>

<head>

    <title>Blog officiel de Jean Forteroche</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="icon" type="img" href="public/css/images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container-body">
        <header>
            <nav class="navbar navbar-expend">
                <div class="nav-brand logo-header">
                    <a href="index.php">Jean Forteroche</a>
                </div>

                <ul class="navbar nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">ACCUEIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=biographie">BIOGRAPHIE</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=listPosts">ROMANS</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>

        <?= $content ?>


        <footer>
            <div id="plansite">
                <h3>Plan du site</h3>
                <p><a href="index.php">Acceuil</a></p>
                <p><a href="index.php?action=biographie">Biographie</a></p>
                <p><a href="index.php?action=listPosts">Romans</a></p>
                <p><a href="index.php?action=contact">Contact</a></p>
            </div>
            <div id="Media">
                <h3>Tu peux me suivre ici...</h3>
                <p>
                    <p><a href="#">Facebook</a></p>
                    <p><a href="#">Twitter</a></p>
                </p>
            </div>
            <div id="Admin">
                <h3>Admin</h3>
                <?php
                if (!empty($_SESSION['username'])) {

                    echo '<p><a href="index.php?action=homeAdmin">Administration</a></p>';
                } else {
                    echo  '<p><a href="index.php?action=connexion">Connexion</a></p>';
                }
                ?>
            </div>


        </footer>
    </div>

</body>

</html>