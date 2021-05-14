<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\ColorProduct;
use App\Models\ProductSize;

class AddColorProduct extends Migration
{
    public static function AddColorProduct()
    {
        for ($i=1; $i<=52; $i++)
        {
            ColorProduct::create($i, rand(1, 7));
            ColorProduct::create($i, rand(1, 7));
        }
        echo "ColorProduct added successfully<br>";
    }

}