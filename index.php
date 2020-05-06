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
        break;
    case 'biographie':
        biography();
        break;
    case 'contact':
        contact();
        break;
    default:
        home();
}
