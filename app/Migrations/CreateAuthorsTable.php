<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateAuthorsTable
 * @package App\Migrations
 */
class CreateAuthorsTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `authors` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` char(255) NOT NULL UNIQUE,
 PRIMARY KEY (`id`)
)";

        if (!$instance->tableExist('authors')) {

            if ($instance->con->query($sql)) {
                echo "Table authors created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table authors already exist" . "\n";
        }

    }

}