<?php
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
        adminConnection($_POST['username'], $_POST['pass']);
        postsBackAdmin();
        break;
    case 'biographie':
        biography();
        break;
    case 'contact':
        contact();
        break;
    case 'viewItem':
        seeItem($_GET['idPost']);
        break;
    case 'insertItem':
        if (!empty($_POST)) {
            $id = $_POST["id"];
            $author = $_POST["author_post"];
            $title = $_POST["title"];
            $content = $_POST["content"];
            $date_post = $_POST["creation_date"];
        }
        addItem($id, $author, $title, $content, $date_post);
        break;
    case 'updateItem':
        if (!empty($_GET['id'])) {
            $id = ($_GET['id']);
        }
        updateItem($id, $author, $title, $content, $date_post);
        break;
    default:
        home();
}
