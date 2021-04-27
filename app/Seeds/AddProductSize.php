<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\ProductSize;

class AddProductSize extends Migration
{
    public static function AddProductSize()
    {
        for ($i=1; $i<=52; $i++)
        {
            for ($j=1; $j<=5; $j++)
            {
                ProductSize::create($i, $j);
            }
        }
    }

}