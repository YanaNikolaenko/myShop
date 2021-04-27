<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateCategoriesTable
 * @package App\Migrations
 */
class CreateCategoriesTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `categories` (
 `id` int NOT NULL AUTO_INCREMENT,
 `title` char(255) NOT NULL,
 `description` char(255) NOT NULL,
 PRIMARY KEY (`id`)
)";

        if (!$instance->tableExist('categories')) {

            if ($instance->con->query($sql)) {
                echo "Table categories created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table categories already exist" . "\n";
        }

    }

}