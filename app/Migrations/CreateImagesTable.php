<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateImagesTable
 * @package App\Migrations
 */
class CreateImagesTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `images` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `url` varchar(10000) NOT NULL,
 `id_products` int(10) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`id_products`) REFERENCES products (`id`)
)";

        if (!$instance->tableExist('images')) {

            if ($instance->con->query($sql)) {
                echo "Table images created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table images already exist" . "\n";
        }

    }

}