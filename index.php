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
        adminConnection($_GET['username'], $_GET['pass']);
        postsBackAdmin();
        break;
    case 'biographie':
        biography();
        break;
    case 'contact':
        contact();
        break;
    case 'viewItem':
        seeItem($_GET['id']);
        break;
    case 'insertItem':
        if (!empty($_GET)) {
            require_once('view/frontend/insertPost.php');
        }
        break;
    case 'create':
        if (!empty($_GET)) {
            var_dump($_GET);
            $author = $_GET["author_post"];
            $title = $_GET["title"];
            $content = $_GET["content"];

            addItem($author, $title, $content);
        }
        break;
    case 'updateItem':
        if (!empty($_POST)) {

            $id = $_POST["id"];
            $author = $_POST["author_post"];
            $title = $_POST["title"];
            $content = $_POST["content"];
            $date_post = $_POST["creation_date"];
            updateItem($id, $author, $title, $content, $date_post);
        }
        break;
    case 'deleteItem':
        if (!empty($_GET['id'])) {
            $id = ($_GET['id']);
        }
        if (!empty($_POST)) {
            $id = $_POST['id'];
            deleteItem($id);
            header("Location: index.php?action=homeAdmin");
        }
        break;
        // case 'unloging':
        //     unlogingAdmin();
        //     break;
    default:
        home();
}
