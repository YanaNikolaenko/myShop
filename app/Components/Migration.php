<?php

namespace App\Components;

use Exception;


class Migration
{
    protected $con;
    //protected $config;


    public function __construct()
    {
        $this->con = (new Db)->getConnection();
        //$this->config = include('helpers\helpers.php');
    }


    public function tableExist($name)
    {
        $results = $this->con->query("SHOW TABLES LIKE '$name'");
        return $results->rowCount() > 0 ? true : false;
    }

}
