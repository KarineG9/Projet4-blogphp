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
    <div class="container">
        <header>
            <nav class="navbar navbar-expend">
                <div class="nav-brand logo-header">
                    <a href="index.php">Bienvenue
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : NULL; ?></a>

                </div>

                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=homeAdmin">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=commentAdmin">Commentaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=Unloging">Déconnexion</a></li>

                </ul>
            </nav>
        </header>
        <div class="container admin">
            <div class="row">
                <div class="col-lg-12">
                    <br />
                    <form class="form-horizontal" action="index.php" method="POST">

                        <button type="submit">Oui</button>
                        <input type="hidden" name="action" value="unlogSubmit">
                    </form>
                    <form class="form-horizontal" action="index.php" method="POST">
                        <button type="submit">Non</button>
                        <input type="hidden" name="action" value="homeAdmin">
                    </form>

                </div>
            </div>
        </div>
    </div>