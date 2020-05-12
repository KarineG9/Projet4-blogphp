<?php
session_start();
require('controller/controller.php');


if (false === isset($_GET['action'])) {
    home();

    return;
}
switch ($_GET['action']) {
    case 'listPosts':
        listPosts();
        break;
    case 'post':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
        break;
    case 'addComment':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            } else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
        break;
    case 'warningComment':
        warningC($_GET['idWarningC']);
        break;
    case 'connexion':
        loginPage();
        break;
    case 'homeAdmin':
        if (!isset($_SESSION['username'])) {
            adminConnection($_POST['username'], $_POST['pass']);
        } else {
            $postAdminObj = new ItemManager();
            $posts = $postAdminObj->getAllPosts();
            require('view/frontend/homeAdmin.php');
        }
        break;
    case 'biographie':
        biography();
        break;
    case 'contact':
        contact();
        break;
    case 'viewItem':
        if (isset($_GET['id'])) {
            $readID = $_GET['id'];
            $itemObj = new ItemManager();
            $seeItem = $itemObj->readPost($readID);
            require('view/frontend/viewItem.php');
        }

        break;
    case 'insertItem':
        require_once('view/frontend/insertPost.php');
        break;
    case 'createSubmit':
        if (!empty($_POST)) {
            $author = $_POST["author_post"];
            $title = $_POST["title"];
            $content = $_POST["content"];
            $postAdminObj = new ItemManager();
            $posts = $postAdminObj->getAllPosts();
            addItem($author, $title, $content);
        }
        break;
    case 'updateItem':
        if (!empty($_POST)) {
            $author = $_POST["author_post"];
            $title = $_POST["title"];
            $content = $_POST["content"];
            $itemObj = new ItemManager();
            $updatePost = $itemObj->updatePostTest($author, $title, $content);
            require_once('view/frontend/updatePost.php');
        }
        break;
    case 'updateSubmit':
        if (!empty($_GET)) {
            $author = $_GET["author_post"];
            $title = $_GET["title"];
            $content = $_GET["content"];
            updateItem($author, $title, $content);
        }
        break;
    case 'deleteItem':
        if (!empty($_POST['id'])) {
            $id = ($_GET['id']);
            require_once('view/frontend/deletePost.php');
        }

        break;
    case 'deleteSubmit':
        if (!empty($_GET['id'])) {
            $id = ($_GET['id']);
            deleteItem($id);
        }
        break;
    case 'unloging':
        unlogPage();
        break;
    case 'unlogSubmit':
        unlogAdmin();
        break;

    case 'commentAdmin':
        listCommentsHome();
        require('view/frontend/commentsHome.php');
        break;
    default:
        home();
}