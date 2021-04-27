<?php


namespace App\Migrations;

use App\Components\Migration;

class DeleteTable extends Migration
{
    public static function deleteAllTables()
    {
        // TODO: доделать функцию по удалению таблиц, когда ф-ция config будет корректно работать

        $instance = new self();
        //$param = $instance->config->config('db.dbname');

        $param = config('db.ok.vasya.batman');
        var_dump($param);

        //$instance->con->query("DROP DATABASE " . $param . "; CREATE DATABASE " . $param . "; USE " . $param . ";");
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