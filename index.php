<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;

$router = new Router();
$router->run();

use App\Models\Image;

echo "<pre>";
var_dump(Image::getByIdProduct(1));
echo "</pre>";