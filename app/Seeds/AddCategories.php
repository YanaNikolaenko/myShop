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
        Category::create('All', 'New Collection 2021');
        Category::create('Women', 'New Arrivals Women Collection 2021');
        Category::create('Men', 'New Arrivals Men Collection 2021');
        Category::create('Kids', 'New Arrivals Kids Collection 2021');
        echo "Categories added successfully<br>";
    }
}