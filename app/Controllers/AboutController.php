<?php


namespace App\Controllers;


class AboutController
{
    public function index()
    {
        require VIEW_ROOT . "parts/about/about.php";
    }

}