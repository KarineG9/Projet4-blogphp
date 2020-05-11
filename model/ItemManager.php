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

    public function createPost($author, $title, $content)
    {
        $sql = "INSERT INTO posts (author_post, title, content) VALUES(?,?,?)";
        return $this->createQuery($sql, [$author, $title, $content]);
    }

    public function updatePost($author, $title, $content)
    {
        $sql = "UPDATE posts SET author_post = ?, title = ?, content = ?,
        WHERE id = ? ";
        return $this->createQuery($sql, [$author, $title, $content]);
    }

    public function updatePostTest($author, $title, $content)
    {
        $sql = "SELECT author_post, title, content FROM posts WHERE id = ?";
        return $this->createQuery($sql, [$author, $title, $content]);
    }

    public function deletePost($id)
    {
        $sql = "DELETE FROM posts where id = ?";
        return $this->createQuery($sql, [$id]);
    }
}