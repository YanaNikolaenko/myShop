<?php


namespace App\Controllers;



class CartController
{
    public function index()
    {
        require VIEW_ROOT . "parts/cart/cart.php";
    }
}