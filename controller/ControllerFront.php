<?php
require_once('ModelFront/PostManager.php');
require_once('ModelFront/CommentManager.php');
require_once('ModelFront/LoginConnexion.php');
require_once('ModelBack/Database.php');
require_once('ModelBack/ItemManager.php');
require_once('ModelBack/CommentsHome.php');

function listPosts()
{
    $data = new PostManager();
    $posts = $data->getPosts();
    require('view/frontend/listPostsView.php');
}

function post()
{

    $data = new PostManager();
    $posts = $data->getPost($_GET['id']);

    $commentObj = new CommentManager();
    $comments = $commentObj->getComments($_GET['id']);
    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentObj = new CommentManager();

    $sql = $commentObj->postComment($postId, $author, $comment);

    if ($sql === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function home()
{
    require('view/frontend/accueil.php');
}

function biography()
{
    require('view/frontend/bio.php');
}

function contact()
{
    require('view/frontend/contact.php');
}
function loginPage()
{
    require('view/frontend/loginAdmin.php');
}
function warningC($commentID, $id)
{
    $commentW = new CommentManager();
    $commW = $commentW->warningComment($commentID);
    header('Location: index.php?action=post&id=' . $id);
}
