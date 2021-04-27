<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\Slider;

class AddSlider extends Migration
{
    public static function AddSlider()
    {
        Slider::create("Muhammed", "Abdullaev", "images/master-slide-02.jpg", 'ko-ko-ko', 'www.mail.ru', 'rotateInDownLeft', 'rotateInUpRight', 'rotateIn');
        Slider::create("YANA YANA YANA", "My new subtitle", "images/master-slide-01.jpg", "onliner","www.onliner.by", 'rollIn', 'lightSpeedIn', 'slideInUp');
        Slider::create("OLE-OLE-OLE", "My new subtitle", "images/master-slide-06.jpg", 'tut by', 'www.tut.by', 'fadeInUp', 'fadeInDown', 'zoomIn');
        Slider::create("Leather Bags", "New Collection 2018", "images/master-slide-05.jpg", 'Shop Now', 'www.pikabu.ru', 'rotateInDownLeft', 'rotateInUpRight', 'rotateIn');
        echo "New Slider added successfully" . "<br>";
    }
}

