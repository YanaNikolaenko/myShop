<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateSliderTable
 * @package App\Migrations
 */
class CreateSliderTable extends Migration
{

    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE slider (" .
            "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY," .
            "title VARCHAR(40) NOT NULL," .
            "subtitle VARCHAR(30) NOT NULL," .
            "image VARCHAR(100) NOT NULL," .
            "label VARCHAR(15) NOT NULL," .
            "link VARCHAR(50) NOT NULL" .
            ")";

        if (!$instance->tableExist('slider')) {

            if ($instance->con->query($sql)) {
                echo "Table slider created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table slider already exist" . "\n";
        }

    }
}