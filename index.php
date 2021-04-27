<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;

$router = new Router();
$router->run();



use App\Migrations\DeleteTable;


//echo "<pre>";
//DeleteTable::deleteAllTables();
//echo "</pre>";