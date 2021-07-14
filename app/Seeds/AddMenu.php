<?php


namespace App\Seeds;

use App\Components\Migration;
use App\Models\Menu;

/**
 * Class AddMenu
 * @package App\Seeds
 */
class AddMenu extends Migration
{
    public static function AddMenu ()
    {
        Menu::create('Home', '/');
        Menu::create('Shop', '/catalog');
        Menu::create('Cart', '/cart');
        Menu::create('Blog', '/blog');
        Menu::create('About', '/about');
        Menu::create('Contact', '/contact');
        echo "Menu added successfully<br>";
    }
}