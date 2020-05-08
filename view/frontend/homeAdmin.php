<?php

require_once('controller/controller.php');

$posts = postsBackAdmin();

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
                <li class="nav-item"><a class="nav-item" href="index.php">Articles</a></li>
                <li class="nav-item"><a class="nav-item" href="index.php?action=biographie">Commentaires</a></li>
                <li class="nav-item"><a class="nav-item" href="index.php?action=listPosts">Déconnexion</a></li>

            </ul>
        </nav>
    </header>

    <div class="container admin">
        <div class="row">
            <h1>Liste des articles </h1>
            <table class=" table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($item = $posts->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';
                        echo '<td>' . $item['author_post'] . '</td>';
                        echo '<td>' . $item['title'] . '</td>';
                        echo '<td>' . $item['content'] . '</td>';
                        echo '<td>' . $item['creation_date'] . '</td>';
                        echo '<td width=300>';
                        echo '<a class="btn btn-outline-success btn-sm" href="index.php?action=insertItem&amp;id=' . $item['id'] . '">Créer</a>';
                        echo ' ';
                        echo '<a class="btn btn-outline-info btn-sm" href="index.php?action=viewItem&amp;idPost=' . $item['id'] . '">Lire</a>';
                        echo ' ';
                        echo '<a class="btn btn-outline-dark btn-sm" href="index.php?action=updateItem&amp;id=' . $item['id'] . '">Modifier</a>';
                        echo ' ';
                        echo '<a class="btn btn-outline-danger btn-sm" href="delete.php?id=' . $item['id'] . '">Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';



                    ?>

                    <?php
                    }
                    $posts->closeCursor();


                    ?>
                </tbody>
            </table>
        </div>
    </div>