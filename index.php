<?php

session_start();
require __DIR__ . '/vendor/autoload.php';
require('controller/ControllerFront.php');
require('controller/ControllerBack.php');


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
        warningC($_GET['idWarningC'], $_GET['idPostC']);
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
            require('view/backend/homeAdmin.php');
        }
        break;
    case 'biographie':
        biography();
        break;
    case 'contact':
        contact();
        break;
    case 'viewItem':
        $itemObj = new ItemManager();
        $seeItem = $itemObj->readPost($_GET['id']);
        seeItem($_GET['id']);
        break;
    case 'insertItem':
        require_once('view/backend/insertPost.php');
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
        viewPostUpdate();
        break;
    case 'updateSubmit':
        $id = $_POST['id'];
        $author = $_POST["author_post"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        updateItem($id, $author, $title, $content);
        break;
    case 'deleteItem':
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            require_once('view/backend/deletePost.php');
        }
        break;
    case 'deleteSubmit':
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $postAdminObj = new ItemManager();
            $posts = $postAdminObj->getAllPosts();
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
        listWarningComments();
        require('view/backend/commentsHome.php');
        break;
    case 'deleteCom':
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            require_once('view/backend/deleteCom.php');
        }
        break;
    case 'deleteComSubmit':
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $commentAdminObj = new CommentsHome();
            $viewComs = $commentAdminObj->getAllComments();
            deleteOneCom($id);
        }
        break;
    case 'acceptCom':
        validComWarning($_GET['idComWarning']);
        break;

    default:
        home();
}