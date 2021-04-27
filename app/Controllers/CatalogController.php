<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;

/**
 * Class CatalogController
 * @package App\Controllers
 */
class CatalogController
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
        //$sliders=Slider::all();
        //require VIEW_ROOT . "slider/list.php";



        require VIEW_ROOT . "catalog/catalog.php";
    }


}
