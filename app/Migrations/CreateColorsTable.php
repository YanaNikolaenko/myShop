<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateColorsTable
 * @package App\Migrations
 */
class CreateColorsTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `colors` (
 `id` int NOT NULL AUTO_INCREMENT,
 `title` char(255) NOT NULL,
 `hex` char(255) NOT NULL,
 PRIMARY KEY (`id`)
)";

        if (!$instance->tableExist('colors')) {

            if ($instance->con->query($sql)) {
                echo "Table colors created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table colors already exist" . "\n";
        }

    }

}