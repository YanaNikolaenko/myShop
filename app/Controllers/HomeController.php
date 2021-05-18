<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;
use App\Models\Category;
use App\Models\Slider;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController
{

    public function __construct()
    {
        //Middlewares
        //UserMiddleware::isAuthorized('email');
    }


    /**
     * This is a function for working with a profile
     */
    public function index()
    {
        $sliders=Slider::all();
        $categories=Category::all();
        require VIEW_ROOT . "parts/home/index.php";
    }


}
