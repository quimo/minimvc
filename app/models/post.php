<?php
namespace App\Models;
class Post {
    public static function getAll(\PDO $conn) {
        $stmt =$conn->query("SELECT * FROM posts");
        return $stmt->fetchAll();
    }
}