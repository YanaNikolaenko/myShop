<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;
use App\Models\Category;
use App\Models\Product;

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
        $products=Product::all();
        $categories=Category::all();

        require VIEW_ROOT . "parts/catalog/catalog.php";
    }


    public function categoryAjax($category)
    {
        return json_encode(Product::getProductsByCategory($category));
    }
}
