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
    public function index($slug)
    {
        $products = [];
        $categories = [];

        if(is_null($slug)){
            $products=Product::all();
        }else{
            $products=Product::getByCategorySlug($slug);
        }

        $categories=Category::all();

        foreach ($categories as $key=>$category){

            $categories[$key]['title'] = $category['title'];
            $categories[$key]['title'] = $category['title'];
            $categories[$key]['title'] = $category['title'];
            $categories[$key]['title'] = $category['title'];
            $categories[$key]['title'] = $category['title'];

            if($category['slug'] === $slug){
                $categories[$key]['is_active'] = true;
            }
        }


        require VIEW_ROOT . "parts/catalog/catalog.php";
    }
//
//
//    public function categoryAjax($category)
//    {
//        return json_encode(Product::getProductsByCategory($category));
//    }
}
