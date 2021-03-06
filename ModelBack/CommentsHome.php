<?php
require_once("ModelBack/Database.php");

class CommentsHome extends Database
{
    public function getAllComments()
    {
        $sql = 'SELECT * FROM comments ORDER BY comment_date DESC';
        return $this->createQuery($sql);
    }

    public function getWarningComments()
    {
        $sql = 'SELECT * FROM comments WHERE warning > 0';
        return $this->createQuery($sql);
    }

    public function deleteCom($id)
    {
        $sql = "DELETE FROM comments  WHERE id = ?";
        return $this->createQuery($sql, [$id]);
    }
    public function validWarningComment($IDcomment)
    {
        $sql = 'UPDATE comments SET warning = FALSE WHERE id = ?';
        return $this->createQuery($sql, [$IDcomment]);
    }
}