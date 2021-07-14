<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class Article
{
    public static function all(): array
    {
        $connect = Db::getConnection();
        $query = $connect->query("SELECT id, title, short_description, content, DATE_FORMAT(date, '%e %b %Y') as date, image, id_category, id_user FROM `articles`");

        $articles = [];
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $key=>$article) {
            $articles[$key]['id'] = $article['id'];
            $articles[$key]['title'] = $article['title'];
            $articles[$key]['short_description'] = $article['short_description'];
            $articles[$key]['content'] = $article['content'];
            $articles[$key]['date'] = $article['date'];
            $articles[$key]['image'] = $article['image'];
            $articles[$key]['category'] = BlogCategories::getById($article['id_category']);
            $articles[$key]['user'] = User::getById($article['id_user']);
            $articles[$key]['count_comments'] = Comments::getCountByArticle($article['id']);
            $articles[$key]['comments'] = Comments::getByArticle($article['id']);
        }
        return $articles;
    }


    public static function create($title, $short_description, $content, $date, $image, $id_category, $id_user): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO articles (title, short_description, content, date, image, id_category, id_user) VALUES (:title, :short_description, :content, :date, :image, :id_category, :id_user)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':short_description', $short_description, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':image', $image, PDO::PARAM_STR);
        $result->bindParam(':id_category', $id_category, PDO::PARAM_INT);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getById($id): array
    {
        $id = (int)$id;
        $connect = Db::getConnection();
        $query = $connect->query("SELECT id, title, short_description, content, DATE_FORMAT(date, '%e %b %Y') as date, image, id_category, id_user FROM `articles` WHERE id = $id");
        $article = $query->fetch(PDO::FETCH_ASSOC);
        $article['category'] = BlogCategories::getById($article['id_category']);
        $article['user'] = User::getById($article['id_user']);
        $article['count_comments'] = Comments::getCountByArticle($article['id']);
        $article['comments'] = Comments::getByArticle($article['id']);
        return $article;
    }

}