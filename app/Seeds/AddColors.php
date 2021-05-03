<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\Color;

class AddColors extends Migration
{
    public static function AddColors ()
    {
        Color::create('Blue', '#00bbec');
        Color::create('Dark blue', '#2c6ed5');
        Color::create('Orange', '#ffa037');
        Color::create('Tomato', '#ff5337');
        Color::create('Olivedrab', '#569b42');
        Color::create('Dark grey', '#393939');
        Color::create('Grey', '#cccccc');
        echo "Colors added successfully<br>";
    }

}