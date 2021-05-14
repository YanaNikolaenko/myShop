<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;

$router = new Router();
$router->run();

use App\Models\Image;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;

//
//echo "<pre>";
//var_dump(Product::getByCategory('women'));
//echo "</pre>";

