<?php
require_once("model/Database.php");

class ItemManager extends Database
{
    public function getAllPosts()
    {
        $sql = 'SELECT * FROM posts ORDER BY creation_date DESC';
        return $this->createQuery($sql);
    }

    public function readPost($itemId)
    {
        $sql = 'SELECT * FROM posts WHERE id = ?';
        return $this->createQuery($sql, [$itemId]);
    }

    public function createPost($author, $title, $content, $date_post)
    {
        $sql = "INSERT INTO posts (author_post, title, content, DATE_FORMAT(creation_date,'%d/%m/%Y') 
        AS creation_date_fr VALUES(?, ?, ?, ?)";
        return $this->createQuery($sql, [$author], [$title], [$content], [$date_post]);
    }

    public function updatePost($id, $author, $title, $content, $date_post)
    {
        $sql = "UPDATE posts SET author_post = ?, title = ?, content = ?, creation_date = ?
        WHERE id = ? ";
        return $this->createQuery($sql, [$id], [$author], [$title], [$content], [$date_post]);
    }

    public function deletePost($id)
    {
        $sql = "DELETE FROM posts where id = ?";
        return $this->createQuery($sql, [$id]);
    }
}