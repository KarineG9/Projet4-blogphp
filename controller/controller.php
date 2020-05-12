<?php
require_once('model/Database.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/LoginConnexion.php');
require_once('model/ItemManager.php');
require_once('model/CommentsHome.php');

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
    $userModel = $userObj->loginUser($pseudo);

    if ($userModel != FALSE && password_verify($password, $userModel['pass'])) {
        $_SESSION['username'] = $userModel['username'];
        $postAdminObj = new ItemManager();
        $posts = $postAdminObj->getAllPosts();
        require('view/frontend/homeAdmin.php');
    } else {

        $_SESSION['error'] = "Votre identifient et votre mot de passe est incorrect";
        require('view/frontend/loginAdmin.php');
    }
}


function userNew($pseudo, $password)
{
    $newUserObj = new LoginConnexion;
    $user = $newUserObj->newUser($pseudo, $password);
}

function seeItem($readID)
{
    $itemObj = new ItemManager();
    $seeItem = $itemObj->readPost($readID);
    require('view/frontend/viewItem.php');
}

function addItem($author, $title, $content)
{
    $itemObj = new ItemManager();
    $createItem = $itemObj->createPost($author, $title, $content);
    $postAdminObj = new ItemManager();
    $posts = $postAdminObj->getAllPosts();
    require('view/frontend/homeAdmin.php');
}
function updatetest($author, $title, $content)
{
    $itemObj = new ItemManager();
    $updatePost = $itemObj->updatePostTest($author, $title, $content);
    require('view/frontend/updatePost.php');
}
function updateItem($author, $title, $content)
{
    $itemObj = new ItemManager();
    $updateItem = $itemObj->updatePost($author, $title, $content);
    require('view/frontend/homeAdmin.php');
}

function deleteItem($id)
{
    $itemObj = new ItemManager();
    $deleteItem = $itemObj->deletePost($id);
    require('view/frontend/homeAdmin.php');
}

function unlogAdmin()
{
    require('view/frontend/unlogAdmin.php');
}

function unlogPage()
{
    require('view/frontend/unloging.php');
}
/* COMMENTS HOME */

function listCommentsHome()
{
    $commentAdminObj = new CommentsHome();
    $viewComs = $commentAdminObj->getAllComments();
    return $viewComs;
}
