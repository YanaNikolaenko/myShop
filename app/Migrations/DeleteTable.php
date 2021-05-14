<?php


namespace App\Migrations;

use App\Components\Migration;


class DeleteTable extends Migration
{
    public static function deleteAllTables()
    {
        $instance = new self();

        try {
            $param = config('db_params.dbname');
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }

        $instance->con->query("DROP DATABASE " . $param . "; CREATE DATABASE " . $param . "; USE " . $param . ";");
    }

    public static function deleteTable($name)
    {
        $instance = new self();
        $instance->con->query("DROP TABLE $name");

        if ($instance->tableExist($name)) {
            echo "Table still exists" . "<br>";
        } else {
            echo "Table deleted successfully" . "<br>";
        }
    }
}