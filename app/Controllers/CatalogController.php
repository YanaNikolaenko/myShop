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
     * @param $slug
     */

    public function index($slug = null)
    {
        $products = [];
        $categories = [];

        if(!is_null($slug) && $slug !== 'all') {
            $products=Product::getByCategorySlug($slug);
        }
        else {
            $products=Product::all();
        }

        $categories=Category::all();
        foreach ($categories as $key=>$category){
            $categories[$key]['title'] = $category['title'];
            $categories[$key]['image'] = $category['image'];
            $categories[$key]['slug'] = $category['slug'];
            $categories[$key]['description'] = $category['description'];
            $categories[$key]['is_active'] = false;

            if($category['slug'] === $slug){
                $categories[$key]['is_active'] = true;
            }
        }


        require VIEW_ROOT . "parts/catalog/catalog.php";
    }


//    public function categoryAjax($category)
//    {
//        return json_encode(Product::getProductsByCategory($category));
//    }
}
