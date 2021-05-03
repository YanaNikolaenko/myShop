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
        $productsForCatalog=Product::selectAllProducts();
        $categories=Category::all();
//        echo "<pre>";
//        var_dump($productsForCatalog);die;
//        echo "</pre>";
        require VIEW_ROOT . "catalog/catalog.php";
    }


}
