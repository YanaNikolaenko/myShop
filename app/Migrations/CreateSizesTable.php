<?php


namespace App\Migrations;


use App\Components\Migration;

/**
 * Class CreateSizesTable
 * @package App\Migrations
 */

class CreateSizesTable extends Migration
{

    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `sizes` (
                 `id` int NOT NULL AUTO_INCREMENT, 
                 `title` char(30) NOT NULL,
                 PRIMARY KEY (`id`)
                  )";

        if (!$instance->tableExist('sizes')) {

            if ($instance->con->query($sql)) {
                echo "Table sizes created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table sizes already exist" . "\n";
        }

    }
}

