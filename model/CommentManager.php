<?php
require_once("model/Database.php");

class CommentManager extends Database
{

    public function getComments($postId)
    {

        $sql = 'SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') 
        AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC';
        return $this->createQuery($sql, [$postId]);
    }

    public function postComment($postId, $author, $comment)
    {

        $sql = 'INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())';
        return $this->createQuery($sql, [$postId, $author, $comment]);
    }

    public function warningComment($IDcomment)
    {
        $sql = 'UPDATE comments SET warning = TRUE WHERE id = ?';
        return $this->createQuery($sql, [$IDcomment]);
    }
}