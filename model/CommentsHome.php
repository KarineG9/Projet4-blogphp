<?php
require_once("model/Database.php");

class CommentsHome extends Database
{
    public function getAllComments()
    {
        $sql = 'SELECT * FROM comments ORDER BY comment_date DESC';
        return $this->createQuery($sql);
    }
}