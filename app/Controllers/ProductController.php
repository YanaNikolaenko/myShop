<?php


namespace App\Controllers;


class ProductController
{
    public function product()
    {
        require VIEW_ROOT . "product/product.php";
    }

    public function allAjax ()
    {
        //return json_encode(Product::all());
    }
}