<?php
require_once('controller/ControllerBack.php');

$viewComs = listCommentsHome();
$viewCommW = listWarningComments();
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
                        <h1 class="titleadmin">Listes des commentaires</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Auteur</th>
                                    <th scope="col">Commentaire</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                while ($item = $viewComs->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td> <?php echo $item['author'] ?></td>
                                    <td width=450><?php echo (substr($item['comment'], 0, 120)); ?></td>
                                    <td><?php echo $item['comment_date'] ?></td>
                                </tr>

                                <?php
                                }
                                $viewComs->closeCursor();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br>

                    <div class="title-group">
                        <h2 class="titleadmin">Commentaires signalés</h2>
                    </div>
                    <div class="table-responsive">
                        <table class=" table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Auteur</th>
                                    <th scope="col">Commentaire</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                while ($item = $viewCommW->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td> <?php echo $item['author'] ?></td>
                                    <td width=450><?php echo (substr($item['comment'], 0, 120)); ?></td>
                                    <td><?php echo $item['comment_date'] ?></td>
                                    <td width=200>
                                        <a class="btn btn-outline-danger btn-md"
                                            href="index.php?action=deleteCom&amp;id=<?php echo $item['id'] ?>">Supprimer</a>
                                        <a class="btn btn-outline-dark btn-md"
                                            href="index.php?action=acceptCom&amp;idComWarning=<?php echo $item['id'] ?>">Poster</a>
                                    </td>
                                </tr>

                                <?php
                                }
                                $viewCommW->closeCursor();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>