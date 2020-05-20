<?php

require_once('controller/controller.php');

?>

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

    <header>
        <div class="logo-header">
            <p><a href="index.php">Bienvenue <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : NULL; ?></a></p>

        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-item" href="index.php?action=homeAdmin">Articles</a></li>
                <li class="nav-item"><a class="nav-item" href="index.php?action=commentAdmin">Commentaires</a></li>
                <li class="nav-item"><a class="nav-item" href="index.php?action=unloging">Déconnexion</a></li>

            </ul>
        </nav>
    </header>

    <div class="container admin">
        <div class="row">
            <div class="form-group">
                <h1>Créer un article </h1>
                <br>
                <div class='listItem'>
                    <form class="form" role="form" action='index.php?action=createSubmit' method="POST">
                        <label for="author">Auteur</label>
                        <input type="text" class="form-control" id="author_id" name="author_post" placeholder="">
                        <label for="author">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="">
                        <label for="author">Contenu</label>
                        <textarea type="text" class="form-control" id="wysiwyg" name="content" rows="5" cols="33" placeholder=""></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-success" name="action">Ajouter</button>
                <br>
                <a class="btn btn-outline-primary" href="index.php?action=homeAdmin">Retour aux articles</a>
                </form>

            </div>
        </div>
    </div>