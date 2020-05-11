<?php
require_once('controller/controller.php');

//$deleteItem = deleteItem($id);
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
                <li class="nav-item"><a class="nav-item" href="index.php?action=unloging">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <div class="container admin">
        <div class="row">
            <div class="form-group">
                <h1>Supprimer un article </h1>
                <br>
                <div class="container admin">
                    <div class="row">
                        <form class="form-horizontal" action="index.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <p class="alert alert-warning">Etes vous sur de supprimer cet article ?</p>
                            <br />
                            <div class="form-actions">
                                <button type="submit" value="deleteSubmit" name="action"
                                    class="btn btn-danger">Oui</button>
                                <a class="btn" href="index.php?action=homeAdmin">Non</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>