<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;
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
        //require VIEW_ROOT . "slider/list.php";


        $sliders=Slider::all();

        require VIEW_ROOT . "home/index.php";
    }


}
