<!DOCTYPE html>
<html>

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
    <link rel="icon" type="img" href="public/css/images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expend">
                <div class="nav-brand logo-header">
                    <a href="index.php">Bienvenue
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : NULL; ?></a>
                </div>

                <ul class="navbar nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=homeAdmin">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=commentAdmin">Commentaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=listPosts">Voir le blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=unloging">Déconnexion</a></li>

                </ul>
            </nav>
        </header>

        <?= $content ?>

    </div>

</body>

</html>