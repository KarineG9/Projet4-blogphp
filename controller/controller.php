<?php
require_once('model/Database.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/LoginConnexion.php');
require_once('model/ItemManager.php');





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
function warningC($commentID)
{

    $commentW = new CommentManager();
    $commW = $commentW->warningComment($commentID);

    echo '<script>alert("Commentaire signalé !")</script>';
}

// PARTIE BACK OFFICE ADMIN //

function adminConnection($pseudo, $password)
{
    $userObj = new LoginConnexion();
    $userModel = $userObj->loginUser($pseudo, $password);
    require('view/frontend/homeAdmin.php');
}

function postsBackAdmin()
{
    $postAdminObj = new ItemManager();
    $posts = $postAdminObj->getAllPosts();
    return $posts;
}

function userNew($pseudo, $password)
{
    $newUserObj = new LoginConnexion;
    $user = $newUserObj->newUser($pseudo, $password);
}

function seeItem()
{
    $itemObj = new ItemManager();
    $seeItem = $itemObj->readPost($_GET['idPost']);
    require('view/frontend/viewItem.php');
}

function addItem($id, $author, $title, $content, $date_post)
{
    $itemObj = new ItemManager();
    $createItem = $itemObj->createPost($id, $author, $title, $content, $date_post);
    require('view/frontend/insertPost.php');
}

function updateItem($id, $author, $title, $content, $date_post)
{
    $itemObj = new ItemManager();
    $updateItem = $itemObj->updatePost($id, $author, $title, $content, $date_post);
    require('view/frontend/updatePost.php');
}
