<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Auth;


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
        $menu=Menu::all();
        $sliders=Slider::all();
        $categories=Category::all();

        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }
        require VIEW_ROOT . "home/home.php";
    }


}
