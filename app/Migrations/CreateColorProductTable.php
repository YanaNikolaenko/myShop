<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateColorProductTable
 * @package App\Migrations
 */
class CreateColorProductTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `color_product` (
 `id` int NOT NULL AUTO_INCREMENT,
 `id_products` int NULL,
 `id_colors` int NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`id_colors`) REFERENCES `colors`(`id`),
 FOREIGN KEY (`id_products`) REFERENCES `products`(`id`)
)";

        if (!$instance->tableExist('color_product')) {

            if ($instance->con->query($sql)) {
                echo "Table color_product created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table color_product already exist" . "\n";
        }

    }
}