<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class Articles
{
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT articles.id, articles.title, articles.content, articles.date, articles.image, blog_categories.title as category, authors.name as author, comments.content as comment, commentators.name as commentator, commentators.email as commentator_email FROM `articles` JOIN blog_categories ON articles.id_category = blog_categories.id JOIN comments ON articles.id = comments.id_article JOIN commentators ON commentators.id = comments.id_commentator JOIN authors ON articles.id_author = authors.id");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function create($title, $content, $date_, $image, $id_category, $id_author): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO articles (title, content, date_, image, id_category, id_author) VALUES (:title, :content, :date_, :image, :id_category, :id_author)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':date_', $date_, PDO::PARAM_STR);
        $result->bindParam(':image', $image, PDO::PARAM_STR);
        $result->bindParam(':id_category', $id_category, PDO::PARAM_INT);
        $result->bindParam(':id_author', $id_author, PDO::PARAM_INT);
        return $result->execute();
    }

}