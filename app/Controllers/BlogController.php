<?php


namespace App\Controllers;


use App\Models\Article;
use App\Models\BlogCategories;

class BlogController
{
    public function index()
    {
        $categories = BlogCategories::all();
        $articles = Article::all();
        require VIEW_ROOT . "parts/blog/blog.php";
    }

    public function article($id_article)
    {
        $article = Article::getById($id_article);
        require VIEW_ROOT . "parts/article/article.php";
    }

}