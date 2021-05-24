<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;
use App\Models\Auth;
use App\Models\Category;
use App\Models\Product;

/**
 * Class CatalogController
 * @package App\Controllers
 */
class CatalogController extends Controller
{

    public function __construct()
    {
        //Middlewares
        //UserMiddleware::isAuthorized('email');
        parent::__construct();
    }


    /**
     * @param $slug
     */

    public function index($slug = null)
    {
        $products = [];
        $categories = [];
        $user = $this->auth;

        if (!is_null($slug)) {
            $products = Product::getByCategorySlug($slug);
        } else {
            $products = Product::all();
        }

        $categories = Category::all();

        foreach ($categories as $key => $category) {
            $categories[$key]['title'] = $category['title'];
            $categories[$key]['image'] = $category['image'];
            $categories[$key]['slug'] = $category['slug'];
            $categories[$key]['description'] = $category['description'];
            $categories[$key]['is_active'] = false;

            if ($category['slug'] === $slug) {
                $categories[$key]['is_active'] = true;
            }
        }

        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }
        require VIEW_ROOT . "catalog/catalog.php";
    }


//    public function categoryAjax($category)
//    {
//        return json_encode(Product::getProductsByCategory($category));
//    }
}
