<?php
require_once("model/Database.php");

class LoginConnexion extends Database
{

    // toDo (à utiliser si création d'un nouveau user)
    public function newUser($pseudo, $password)
    {
        $sql = "INSERT INTO users username, pass VALUES(?,?)";
        $passHash = password_hash($password, PASSWORD_DEFAULT);
        return $this->createQuery($sql, [$pseudo, $passHash]);
    }



    public function loginUser($pseudo, $password)
    {
        $sql = "SELECT username, pass FROM users WHERE username = ?";

        $result = $this->createQuery($sql, [$pseudo]);
        $user = $result->fetch(PDO::FETCH_OBJ);
        if ($user && password_verify($password, $user->pass)) {
            session_start();
            $_SESSION['username'] = $pseudo;
        } else {
            echo "erreur";
        }
    }
}