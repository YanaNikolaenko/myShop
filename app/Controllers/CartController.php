<?php


namespace App\Controllers;

use App\Models\Auth;
use App\Models\Category;
use App\Models\Menu;

class CartController
{
    public function index()
    {
        $menu=Menu::all();
        $categories=Category::all();

        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }
        require VIEW_ROOT . "cart/cart.php";
    }
}