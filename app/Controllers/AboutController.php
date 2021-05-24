<?php


namespace App\Controllers;


use App\Models\Auth;
use App\Models\Category;

class AboutController
{
    public function index()
    {
        $categories=Category::all();
        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }
        require VIEW_ROOT . "about/about.php";
    }

}