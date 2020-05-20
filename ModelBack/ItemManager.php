<?php
require_once("ModelBack/Database.php");

class ItemManager extends Database
{
    public function getAllPosts()
    {
        $sql = 'SELECT * FROM posts ORDER BY creation_date DESC';
        return $this->createQuery($sql);
    }

    public function readPost($idItem)
    {
        $sql = "SELECT * FROM posts where id = ?";
        return $this->createQuery($sql, [$idItem]);
    }

    public function createPost($author, $title, $content)
    {
        $sql = "INSERT INTO posts (author_post, title, content) VALUES(?,?,?)";
        return $this->createQuery($sql, [$author, $title, $content]);
    }


    public function updatePost($id, $author, $title, $content)
    {
        $sql = "UPDATE posts SET author_post = '$author', title = '$title', content = '$content' WHERE id = '$id' ";
        return $this->createQuery($sql, [$id, $author, $title, $content]);
    }



    public function deletePost($id)
    {
        $sql = "DELETE FROM posts  WHERE id = ?";
        return $this->createQuery($sql, [$id]);
    }
}
