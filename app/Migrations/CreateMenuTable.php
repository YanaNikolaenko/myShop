<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateMenuTable
 * @package App\Migrations
 */
class CreateMenuTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `menu` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` char(12) NOT NULL,
 PRIMARY KEY (`id`)
)";

        if (!$instance->tableExist('menu')) {

            if ($instance->con->query($sql)) {
                echo "Table 'menu' created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table menu already exist" . "\n";
        }

    }

}