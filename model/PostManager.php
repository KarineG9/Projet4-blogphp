<?php
require_once("model/Database.php");

class PostManager extends Database
{
    public function getPosts()
    {
        $sql = 'SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') 
        AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5';
        return $this->createQuery($sql);
    }

    public function getPost($postId)
    {
        $sql = 'SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') 
        AS creation_date_fr FROM posts WHERE id = ?';
        return $this->createQuery($sql, [$postId]);
    }
}