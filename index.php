<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;

$router = new Router();
$router->run();

