<?php


namespace App\Controllers;


use App\Models\Auth;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;


class ProductController
{
    public function product($id)
    {
        $menu=Menu::all();
        $product = Product::getById($id);
        $categories=Category::all();

        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }
        require VIEW_ROOT . "product/product.php";
    }

    public function allAjax()
    {
        return json_encode(Product::all());
    }

}