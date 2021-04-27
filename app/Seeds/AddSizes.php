<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\Size;

class AddSizes extends Migration
{
    public static function AddSizes()
    {
        Size::create('Size XS');
        Size::create('Size S');
        Size::create('Size M');
        Size::create('Size L');
        Size::create('Size XL');
        echo "Sizes added successfully<br>";
    }

}