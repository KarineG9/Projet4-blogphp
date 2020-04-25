<?php
require_once("model/Manager.php");

class LoginConnexion extends Database
{

    public function ConnectAdmin()
    {
        $sql = 'SELECT id, username, pass FROM users';
        return $this->createQuery($sql);
    }
}