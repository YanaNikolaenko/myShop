<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;

$router = new Router();
$router->run();

use App\Components\Cookie;
use App\Models\Image;
use App\Models\Comments;
use App\Models\Color;
use App\Models\Product;
use App\Models\Commentators;

//echo "<pre>";
//var_dump(Commentators::firstOrCreate('Яна', 'in444@mail.com'));
//echo "</pre>";


var_dump(Cookie::get('errors'));
