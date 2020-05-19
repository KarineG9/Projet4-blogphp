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
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="icon" type="img" href="public/css/images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="logo-header">
            <p class='title-header'>Bienvenue</p>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-item" href="index.php?action=homeAdmin">Articles</a></li>
                <li class="nav-item"><a class="nav-item" href="index.php?action=commentAdmin">Commentaires</a></li>
                <li class="nav-item"><a class="nav-item" href="index.php?action=Unloging">Déconnexion</a></li>

            </ul>
        </nav>
    </header>
    <div class="container admin">
        <div class="row">
            <br />
            <form class="form-horizontal" action="index" method="POST">
                <input type="hidden" name="id" value="unlogSubmit" />

                <p><strong>Vous allez vous déconnecter.</strong></p>

                <br />
                <div class="form-actions">
                    <button type="submit" value="unlogSubmit" name="action" class="btn btn-outline-warning">Oui</button>
                    <a class="btn" href="index.php?action=homeAdmin">Non</a>
                </div>
                <p>

            </form>
        </div>
    </div>