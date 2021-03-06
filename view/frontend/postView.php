<?php ob_start(); ?>

<h1 class=title-chap>Chapitre 1</h1>
<a href="listPosts">

    <p class='returnlist'>Retour aux chapitres</p>
</a>
<div class="news">
    <?php
    $data = $posts;

    ?>
    <h3 class='title-post'>
        <?= htmlspecialchars(html_entity_decode($data['title'])) ?>
        <em>le <?= $data['creation_date_fr'] ?></em>
    </h3>

    <div class="content-post">
        <p><?= nl2br(html_entity_decode($data['content'])) ?></p>
    </div>

</div>


<div class="content-comments">
    <h2>Commentaires</h2>
    <hr>

    <?php
    while ($comment = $comments->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?>
        <a
            href="index.php?action=warningComment&amp;idWarningC=<?= $comment['id'] ?>&amp;idPostC=<?= $data['id'] ?>">(signaler)</a>
        <span style="color:red"><?php echo isset($alert) ? $alert : NULL; ?></span>
    </p>


    <p><?= nl2br(filter_var($comment['comment'])) ?></p>


    <?php
    }
    ?>

    <form action="index.php?action=addComment&amp;id=<?= $data['id'] ?>" method="post">

        <label for="author">Nom</label>
        <br />
        <input type="text" id="author" name="author" />
        <br />
        <label for="comment">Commentaire</label>
        <br />
        <textarea id="comment" name="comment"></textarea>
        <br />
        <button class="btn btn-light" type="submit">Valider</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('templateFront.php'); ?>