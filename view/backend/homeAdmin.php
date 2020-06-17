<?php
require_once('controller/ControllerBack.php');
$postAdminObj = new ItemManager();
$posts = $postAdminObj->getAllPosts();

?>
<?php ob_start(); ?>

<div class="container admin mt-5">
    <div class="row">
        <div class="col-lg-12">

            <div class="title-group">
                <h1 class="titleadmin">Liste des articles </h1>

                <a class="btn btn-outline-success btn-md" href="insertItem">Créer</a>

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
                            <td width=100><?php echo substr(securiteString($item['content']), 0, 120); ?></td>
                            <td width=100><?php echo $item['creation_date'] ?></td>
                            <td width=170>
                                <a class="btn btn-outline-info btn-md"
                                    href="index.php?action=viewItem&amp;id=<?php echo $item['id'] ?>">Lire</a>
                                <a class="btn btn-outline-dark btn-md"
                                    href="index.php?action=updateItem&amp;id=<?php echo $item['id'] ?>">Modifier</a>
                                <a class="btn btn-outline-danger btn-md"
                                    href="index.php?action=deleteItem&amp;id=<?php echo $item['id'] ?>">Supprimer</a>
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
<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>