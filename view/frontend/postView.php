<?php

require_once('model/Manager.php');

require_once('model/PostManager.php');

require_once('model/CommentManager.php');
?>

<?php ob_start(); ?>

<h1 class=title-chap>Chapitre 1</h1>
<p><a href="index.php?action=listPosts">
        <font color=black><strong>
                <center>Retour aux chapitres</center>
            </strong></font>
    </a></p>

<div class="news">
    <?php
    $data = $posts->fetch(PDO::FETCH_ASSOC);

    ?>
    <h3>
        <?= htmlspecialchars($data['title']) ?>
        <em>le <?= $data['creation_date_fr'] ?></em>
    </h3>

    <p class="content-post">
        <?= nl2br(htmlspecialchars($data['content'])) ?>
    </p>

</div>


<div class="content-comments">
    <h2>Commentaires</h2>
    <hr>

    <?php
    while ($comment = $comments->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> <a
            href="index.php?action=edit&amp;id=<?= $comment['id'] ?>&amp;postID=<?= $data['id'] ?>">(signaler)</a>
    </p>
    </p>

    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>


    <?php
    }
    ?>

    <form action="index.php?action=addComment&amp;id=<?= $data['id'] ?>" method="post">

        <div class="col-sm-12">
            <label for="author">Nom</label><br />
            <input type="text" id="author" name="author" />
        </div>

        <div class="col-sm-12">
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div>
        <br />
        <button type="submit">Valider</button>

</div>

</form>

</div>


<?php


$comments->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>