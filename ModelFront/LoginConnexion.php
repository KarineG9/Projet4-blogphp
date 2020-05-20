<?php
require_once("ModelBack/Database.php");

class LoginConnexion extends Database
{

    // toDo (à utiliser si création d'un nouveau user)
    public function newUser($pseudo, $password)
    {
        $sql = "INSERT INTO users username, pass VALUES(?,?)";
        $passHash = password_hash($password, PASSWORD_DEFAULT);
        return $this->createQuery($sql, [$pseudo, $passHash]);
    }



    public function loginUser($pseudo)
    {
        $sql = "SELECT * FROM users WHERE username = ?";

        $result = $this->createQuery($sql, [$pseudo]);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}
