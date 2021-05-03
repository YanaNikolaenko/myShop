<?php


namespace App\Controllers;


use App\Models\Product;

class ProductController
{
    public function product()
    {
        $product = Product::getProductById(6);

//        echo "<pre>";
//var_dump($product);
//        echo "</pre>";

        require VIEW_ROOT . "product/product.php";
    }

    public function allAjax ()
    {
        //return json_encode(Product::all());
    }
}