<?php
require_once('ModelFront/PostManager.php');
require_once('ModelFront/CommentManager.php');
require_once('ModelFront/LoginConnexion.php');
require_once('ModelBack/Database.php');
require_once('ModelBack/ItemManager.php');
require_once('ModelBack/CommentsHome.php');

function adminConnection($pseudo, $password)
{
    $userObj = new LoginConnexion();
    $userModel = $userObj->loginUser($pseudo);

    if ($userModel != FALSE && password_verify($password, $userModel['pass'])) {
        $_SESSION['username'] = $userModel['username'];
        $postAdminObj = new ItemManager();
        $posts = $postAdminObj->getAllPosts();
        require('view/backend/homeAdmin.php');
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

function seeItem()
{
    $itemObj = new ItemManager();
    $seeItem = $itemObj->readPost($_GET['id']);
    require('view/backend/viewItem.php');
}

function addItem($author, $title, $content)
{
    $itemObj = new ItemManager();
    $createItem = $itemObj->createPost($author, $title, $content);
    $postAdminObj = new ItemManager();
    $posts = $postAdminObj->getAllPosts();
    require('view/backend/homeAdmin.php');
}

function viewPostUpdate()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $itemObj = new ItemManager();
        $seeItem = $itemObj->readPost($_GET['id']);
        require('view/backend/updatePost.php');
    }
}
function updateItem($id, $author, $title, $content)
{
    $itemObj = new ItemManager();
    $updateItem = $itemObj->updatePost($id, $author, $title, $content);
    $postAdminObj = new ItemManager();
    $posts = $postAdminObj->getAllPosts();
    require('view/backend/homeAdmin.php');
}

function deleteItem($id)
{
    $itemObj = new ItemManager();
    $itemObj->deletePost($id);

    $postAdminObj = new ItemManager();
    $posts = $postAdminObj->getAllPosts();
    require('view/backend/homeAdmin.php');
}

function unlogAdmin()
{
    require('view/backend/unlogAdmin.php');
}

function unlogPage()
{
    require('view/backend/unloging.php');
}
/* COMMENTS HOME */

function listCommentsHome()
{
    $commentAdminObj = new CommentsHome();
    $viewComs = $commentAdminObj->getAllComments();
    return $viewComs;
}

function listWarningComments()
{
    $commentAdminObj = new CommentsHome();
    $viewCommW = $commentAdminObj->getWarningComments();
    return $viewCommW;
}

function deleteOneCom($id)
{
    $commentAdminObj = new CommentsHome();
    $deleteCom = $commentAdminObj->deleteCom($id);

    $commentAdminObj = new CommentsHome();
    $viewComs = $commentAdminObj->getAllComments();

    require('view/backend/commentsHome.php');
}

function validComWarning($IDcomment)
{
    $commentAdminObj = new CommentsHome();
    $validWcom = $commentAdminObj->validWarningComment($IDcomment);
    require('view/backend/commentsHome.php');
}