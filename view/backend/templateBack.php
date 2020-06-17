<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Blog officiel de Jean Forteroche</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#wysiwyg'
    });
    </script>
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="icon" href="public/css/images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container-body">
        <header>
            <nav class="navbar navbar-expand-md bg-custom">

                <a class="navbar-brand" href="index.php">Bienvenue
                    <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : NULL; ?></a>
                <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                    data-target="#responsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="responsive">
                    <ul class="navbar nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="homeAdmin">Articles</a></li>
                        <li class="nav-item"><a class="nav-link" href="commentAdmin">Commentaires</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="listPosts">Voir le blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="unloging">Déconnexion</a></li>
                    </ul>
                </div>
            </nav>
        </header>


        <?= $content ?>

    </div>

</body>

</html>