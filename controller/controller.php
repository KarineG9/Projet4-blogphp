<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/Manager.php');


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




function adminConnection()
{

    $pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    if (password_verify($_POST['pass'], $pass_hash)) {
        echo 'mot de passe valide';
    } else {
        echo 'erreur';
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
function login()
{
    require('view/frontend/loginAdmin.php');
}
