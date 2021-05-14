<?php


namespace App\Controllers;


class BlogController
{
    public function index()
    {
        require VIEW_ROOT . "parts/blog/blog.php";
    }
}