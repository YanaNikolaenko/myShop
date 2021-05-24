<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;

$router = new Router();
$router->run();

use App\Models\Image;
use App\Models\Comments;
use App\Models\Color;
use App\Models\Product;
use App\Models\Article;

//
//echo "<pre>";
//var_dump($_SERVER['REQUEST_URI']);
//echo "</pre>";
