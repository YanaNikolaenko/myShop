<?php


namespace App\Migrations;


use App\Components\Migration;

/**
 * Class CreateProductSizeTable
 * @package App\Migrations
 */
class CreateProductSizeTable extends Migration
{
    public static function up()
    {
        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `product_size` (
 `id` int NOT NULL AUTO_INCREMENT,
 `id_products` int NULL,
 `id_sizes` int NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`id_sizes`) REFERENCES `sizes`(`id`) ON DELETE CASCADE,
 FOREIGN KEY (`id_products`) REFERENCES `products`(`id`) ON DELETE CASCADE
)";

        if (!$instance->tableExist('product_size')) {

            if ($instance->con->query($sql)) {
                echo "Table product_size created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table product_size already exist" . "\n";
        }

    }
}