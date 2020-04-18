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

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body background-image:url(public\css\images\ALASKA78.jpg)>
    <header>
        <div class="logo-header">
            <p>Jean Forteroche</p>
        </div>
        <nav>

            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
                <li><a href="index.php?action=biographie">BIOGRAPHIE</a></li>
                <li><a href="index.php?action=listPosts">ROMANS</a></li>
                <li><a href="index.php?action=contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <?= $content ?>


    <footer>
        <div id="plansite">
            <h3>Plan du site</h3>
            <p><a href="#">Acceuil</a></p>
            <p><a href="#">Biographie</a></p>
            <p><a href="#">Romans</a></p>
            <p><a href="#">Contact</a></p>
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
            <p><a href="index.php?action=login">Connexion</a></p>
        </div>


    </footer>
</body>

</html>