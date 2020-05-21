<?php

require_once('controller/ControllerBack.php');


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
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="icon" type="img" href="public/css/images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="container">
            <nav class="navbar navbar-expend">
                <div class="nav-brand logo-header">
                    <a href="index.php">Bienvenue
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : NULL; ?></a>
                </div>
                <ul class="navbar nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=homeAdmin">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=commentAdmin">Commentaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=unloging">Déconnexion</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <div class="container admin">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <h1 class="titleadmin">Vue de l'article</h1>
                    <br>
                    <div class='listItem'>
                        <?php
                        $item = $seeItem->fetch(PDO::FETCH_ASSOC);

                        ?>
                        <label>Auteur</label><?php echo ' ' . $item['author_post']; ?>
                        <label>Titre</label><?php echo ' ' . $item['title']; ?>
                        <label>Contenu</label><?php echo ' ' . $item['content']; ?>
                        <label>Date</label><?php echo ' ' . $item['creation_date']; ?>
                    </div>
                    <br>
                    <a class="btn btn-outline-primary" href="index.php?action=homeAdmin">Retour aux articles</a>
                </div>
            </div>
        </div>
    </div>