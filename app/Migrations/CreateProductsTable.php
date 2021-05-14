<?php


namespace App\Migrations;


use App\Components\Migration;

/**
 * Class CreateProductsTable
 * @package App\Migrations
 */

class CreateProductsTable extends Migration
{

    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `products` (
 `id` int NOT NULL AUTO_INCREMENT,
 `id_category` int NOT NULL,
 `title` char(255) NOT NULL,
 `price` float unsigned NOT NULL,
 `discount` tinyint(100) unsigned NOT NULL DEFAULT '0',
 `is_sale` tinyint(1) NOT NULL DEFAULT 0,
 `is_new` tinyint(1) NOT NULL DEFAULT 0,
 `description` varchar(1000) NOT NULL,
 `additional_information` varchar(1000) DEFAULT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`id_category`) REFERENCES `categories`(`id`) ON DELETE CASCADE
)";

        if (!$instance->tableExist('products')) {

            if ($instance->con->query($sql)) {
                echo "Table products created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table products already exist" . "\n";
        }

    }

}