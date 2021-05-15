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
        $time = date("Y-m-d H:i:s");
        $connect = Db::getConnection();
        $sql = "INSERT INTO comments (content, time, id_commentator, id_article) VALUES (:content, :time, :id_commentator, :id_article)";
        $result = $connect->prepare($sql);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':time', $time, PDO::PARAM_STR);
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

    public static function getByArticle($id_article) : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT comments.content, DATE_FORMAT(comments.time, '%k:%i &nbsp %e.%c.%Y') as time, commentators.name FROM `comments` JOIN commentators ON comments.id_commentator = commentators.id WHERE comments.id_article = $id_article");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
}