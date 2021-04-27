<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\Color;

class AddColors extends Migration
{
    public static function AddColors ()
    {
        Color::create('blue', '#00bbec');
        Color::create('dark blue', '#2c6ed5');
        Color::create('orange', '#ffa037');
        Color::create('tomato', '#ff5337');
        Color::create('olivedrab', '#569b42');
        Color::create('dark grey', '#393939');
        Color::create('grey', '#cccccc');
        echo "Colors added successfully<br>";
    }

}