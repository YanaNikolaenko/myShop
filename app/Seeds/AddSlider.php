<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\Slider;

class AddSlider extends Migration
{
    public static function AddSlider()
    {

        Slider::create("YANA YANA YANA", "My new subtitle", "https://preview.colorlib.com/theme/fashe/images/master-slide-01.jpg", "onliner","www.onliner.by");
        Slider::create("OLE-OLE-OLE", "My new subtitle", "https://preview.colorlib.com/theme/fashe/images/master-slide-05.jpg", 'tut by', 'www.tut.by');
        Slider::create("Leather Bags", "New Collection 2018", "https://preview.colorlib.com/theme/fashe/images/master-slide-05.jpg", 'Shop Now', 'www.pikabu.ru');
        echo "New Slider added successfully" . "<br>";
    }
}

