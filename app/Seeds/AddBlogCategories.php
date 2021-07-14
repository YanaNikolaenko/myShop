<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\BlogCategories;

class AddBlogCategories extends Migration
{
    public static function AddBlogCategories()
    {
        BlogCategories::create('Fashion');
        BlogCategories::create('Beauty');
        BlogCategories::create('Street Style');
        BlogCategories::create('Cooking, Food');
        BlogCategories::create('Life Style');
        BlogCategories::create('DIY & Crafts');
        echo "BlogCategories added successfully<br>";
    }

}