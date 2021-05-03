<?php

namespace App\Components;

use Exception;


class Migration
{
    protected $con;


    public function __construct()
    {
        $this->con = (new Db)->getConnection();

        //это костыль, потому что композер автозагружает колбэки только из классов, а конфиг(), который я использую, находится не в классе
        require(dirname(\Composer\Factory::getComposerFile()) . '/helpers/helpers.php');
    }


    public function tableExist($name)
    {
        $results = $this->con->query("SHOW TABLES LIKE '$name'");
        return $results->rowCount() > 0 ? true : false;
    }

}
