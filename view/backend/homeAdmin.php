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

                <ul class="navbar nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=homeAdmin">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=commentAdmin">Commentaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=unloging">Déconnexion</a></li>
                </ul>
            </nav>
        </header>

        <div class="container admin">
            <div class="row">
                <div class="col-lg-12">

                    <div class="title-group">
                        <h1 class="titleadmin">Liste des articles </h1>

                        <a class="btn btn-outline-success btn-md" href="index.php?action=insertItem">Créer</a>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Auteur</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($item = $posts->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <tr>
                                        <td width=100><?php echo $item['author_post'] ?></td>
                                        <td width=100> <?php echo $item['title'] ?></td>
                                        <td width=100><?php echo (substr($item['content'], 0, 120)); ?></td>
                                        <td width=100><?php echo $item['creation_date'] ?></td>
                                        <td width=170>
                                            <a class="btn btn-outline-info btn-md" href="index.php?action=viewItem&amp;id=<?php echo $item['id'] ?>">Lire</a>
                                            <a class="btn btn-outline-dark btn-md" href="index.php?action=updateItem&amp;id=<?php echo $item['id'] ?>">Modifier</a>
                                            <a class="btn btn-outline-danger btn-md" href="index.php?action=deleteItem&amp;id=<?php echo $item['id'] ?>">Supprimer</a>
                                        </td>
                                    </tr>

                                <?php
                                }
                                $posts->closeCursor();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>