<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;
use App\Migrations\CreateUserTable;
use App\Migrations\DeleteTable;
use App\Migrations\UpdateUserTable;
$router = new Router();
$router->run();


//DeleteTable::deleteTable("user");
DeleteTable::deleteAllTables();
//CreateUserTable::up();
//UpdateUserTable::addColumn();


