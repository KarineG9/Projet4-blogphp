<?php
require_once('controller/ControllerBack.php');

$viewComs = listCommentsHome();
$viewCommW = listWarningComments();
?>

<?php ob_start(); ?>

<div class="container admin mt-5">
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
<?php $content = ob_get_clean(); ?>
<?php require('templateBack.php'); ?>