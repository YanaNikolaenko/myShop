<?php


namespace App\Controllers;


use App\Models\Product;


class ProductController
{
    public function product($id)
    {
        $product = Product::getById($id);

        require VIEW_ROOT . "parts/product/product.php";
    }

    public function allAjax()
    {
        return json_encode(Product::all());
    }

}