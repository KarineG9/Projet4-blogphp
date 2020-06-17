<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
require('controller/ControllerFront.php');
require('controller/ControllerBack.php');
$urlGet = filter_input_array(INPUT_GET);
$urlPost = filter_input_array(INPUT_POST);

if (isset($urlGet['action'])) {
    $route = $urlGet['action'];
} else if (isset($urlPost['action'])) {
    $route = $urlPost['action'];
}

if (empty($route)) {
    home();
    return;
}

switch ($route) {
    case 'home':
        home();
        break;
    case 'listPosts':
        listPosts();
        break;
    case 'post':
        if (isset($urlGet['id']) && $urlGet['id'] > 0) {
            post();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
        break;
    case 'addComment':
        if (isset($urlGet['id']) && $urlGet['id'] > 0) {
            if (!empty($urlPost['author']) && !empty($urlPost['comment'])) {
                addComment($urlGet['id'], securiteString($urlPost['author']), securiteString($urlPost['comment']));
            } else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
        break;
    case 'warningComment':
        warningC($urlGet['idWarningC'], $urlGet['idPostC']);
        break;
    case 'connexion':
        loginPage();
        break;
    case 'homeAdmin':
        if (!empty($_SESSION['username'])) {
            require('view/backend/homeAdmin.php');
        } else if (!empty($urlPost['username']) && !empty($urlPost['pass'])) {
            adminConnection(securiteString($urlPost['username']), securiteString($urlPost['pass']));
        } else {
            loginPage();
        }
        break;
    case 'biographie':
        biography();
        break;
    case 'contact':
        contact();
        break;
    case 'viewItem':
        if (!empty($_SESSION['username'])) {
            $itemObj = new ItemManager();
            $seeItem = $itemObj->readPost($_GET['id']);
            seeItem($urlGet['id']);
        } else {
            loginPage();
        }
        break;
    case 'insertItem':
        if (!empty($_SESSION['username'])) {
            require_once('view/backend/insertPost.php');
        } else {
            loginPage();
        }
        break;
    case 'createSubmit':
        if (!empty($_SESSION['username'])) {
            if (!empty($urlPost)) {
                $author = $urlPost["author_post"];
                $title = $urlPost["title"];
                $content = $urlPost["content"];
                $postAdminObj = new ItemManager();
                $posts = $postAdminObj->getAllPosts();
                addItem($author, $title, $content);
            }
        } else {
            loginPage();
        }
        break;
    case 'updateItem':
        if (!empty($_SESSION['username'])) {
            viewPostUpdate();
        } else {
            loginPage();
        }
        break;
    case 'updateSubmit':
        if (!empty($_SESSION['username'])) {
            $id = $urlPost['id'];
            $author = $urlPost["author_post"];
            $title = $urlPost["title"];
            $content = $urlPost["content"];
            updateItem($id, $author, $title, $content);
        } else {
            loginPage();
        }
        break;
    case 'deleteItem':
        if (!empty($_SESSION['username'])) {
            if (!empty($urlGet['id'])) {
                $id = $urlGet['id'];
                require_once('view/backend/deletePost.php');
            }
        } else {
            loginPage();
        }
        break;
    case 'deleteSubmit':
        if (!empty($_SESSION['username'])) {
            if (!empty($urlPost['id'])) {
                $id = $urlPost['id'];
                $postAdminObj = new ItemManager();
                $posts = $postAdminObj->getAllPosts();
                deleteItem($id);
            }
        } else {
            loginPage();
        }
        break;
    case 'unloging':
        if (!empty($_SESSION['username'])) {
            unlogPage();
        } else {
            loginPage();
        }
        break;
    case 'unlogSubmit':
        if (!empty($_SESSION['username'])) {
            unlogAdmin();
        } else {
            loginPage();
        }
        break;
    case 'commentAdmin':
        if (!empty($_SESSION['username'])) {
            listCommentsHome();
            listWarningComments();
            require('view/backend/commentsHome.php');
        } else {
            loginPage();
        }
        break;
    case 'deleteCom':
        if (!empty($_SESSION['username'])) {
            if (!empty($urlGet['id'])) {
                $id = $urlGet['id'];
                require_once('view/backend/deleteCom.php');
            }
        } else {
            loginPage();
        }
        break;
    case 'deleteComSubmit':
        if (!empty($_SESSION['username'])) {
            if (!empty($urlPost['id'])) {
                $id = $urlPost['id'];
                $commentAdminObj = new CommentsHome();
                $viewComs = $commentAdminObj->getAllComments();
                deleteOneCom($id);
            }
        } else {
            loginPage();
        }
        break;
    case 'acceptCom':
        if (!empty($_SESSION['username'])) {
            validComWarning($urlGet['idComWarning']);
        } else {
            loginPage();
        }
        break;
    default:
        pageError();
}