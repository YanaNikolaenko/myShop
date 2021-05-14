<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class Comments
{
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM `comments`");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($content, $id_commentator, $id_article): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO comments (content, id_commentator, id_article) VALUES (:content, :id_commentator, :id_article)";
        $result = $connect->prepare($sql);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':id_commentator', $id_commentator, PDO::PARAM_INT);
        $result->bindParam(':id_article', $id_article, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getCountByArticle($id_article) : int
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM `comments` WHERE id_article = $id_article");
        return count($results->fetchAll(PDO::FETCH_ASSOC));
    }
}