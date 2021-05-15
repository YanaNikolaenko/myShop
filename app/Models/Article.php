<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class Article
{
    public static function all(): array
    {
        $connect = Db::getConnection();
        $query = $connect->query("SELECT id, title, summary, content, DATE_FORMAT(date, '%e %b %Y') as date, image, id_category, id_author FROM `articles`");

        $articles = [];
        $i=0;
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $article) {
            $articles[$i]['id'] = $article['id'];
            $articles[$i]['title'] = $article['title'];
            $articles[$i]['summary'] = $article['summary'];
            $articles[$i]['content'] = $article['content'];
            $articles[$i]['date'] = $article['date'];
            $articles[$i]['image'] = $article['image'];
            $category = BlogCategories::getById($article['id_category']);
            $articles[$i]['category'] = $category['title'];
            $author = Authors::getById($article['id_author']);
            $articles[$i]['author'] = $author['name'];
            $articles[$i]['count_comments'] = Comments::getCountByArticle($article['id']);
            $i++;
        }
        return $articles;
    }


    public static function create($title, $summary, $content, $date, $image, $id_category, $id_author): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO articles (title, summary, content, date, image, id_category, id_author) VALUES (:title, :summary, :content, :date, :image, :id_category, :id_author)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':summary', $summary, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':image', $image, PDO::PARAM_STR);
        $result->bindParam(':id_category', $id_category, PDO::PARAM_INT);
        $result->bindParam(':id_author', $id_author, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getById($id): array
    {
        $id = (int)$id;
        $connect = Db::getConnection();
        $query = $connect->query("SELECT id, title, summary, content, DATE_FORMAT(date, '%e %b %Y') as date, image, id_category, id_author FROM `articles` WHERE id = $id");
        $article = $query->fetch(PDO::FETCH_ASSOC);
        $category = BlogCategories::getById($article['id_category']);
        //$article['date'] = date($article['date']);
        $article['category'] = $category['title'];
        $author = Authors::getById($article['id_author']);
        $article['author'] = $author['name'];
        $article['count_comments'] = Comments::getCountByArticle($article['id']);
        $article['comments'] = Comments::getByArticle($article['id']);
        return $article;
    }

}