<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\Category;

/**
 * Class AddCategories
 * @package App\Seeds
 */
class AddCategories extends Migration
{
    public static function AddCategories ()
    {
        Category::create('Women', 'images/banner-16.jpg', 'women', 'New Arrivals Women Collection 2021');
        Category::create('Men', 'images/banner-15.jpg', 'men', 'New Arrivals Men Collection 2021');
        Category::create('Kids', 'images/banner-17.jpg', 'kids', 'New Arrivals Kids Collection 2021');
        echo "Categories added successfully<br>";
    }
}