<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class BlogCategories
{
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM blog_categories");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function create($title): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO blog_categories (title) VALUES (:title)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getById($id) : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT title FROM blog_categories WHERE id = $id");
        return $results->fetch(PDO::FETCH_ASSOC);
    }


}