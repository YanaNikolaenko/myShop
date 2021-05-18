<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateArticlesTable
 * @package App\Migrations
 */
class CreateArticlesTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `articles` (
 `id` int(10) NOT NULL AUTO_INCREMENT,
 `title` char(255) NOT NULL,
 `short_description` varchar(800) NOT NULL,
 `content` varchar(10000) NOT NULL,
 `date` date NOT NULL,
 `image` char(255) NOT NULL,
 `id_category` int(10) NOT NULL,
 `id_user` int(10) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`id_category`) REFERENCES blog_categories (`id`) ON DELETE CASCADE,  
 FOREIGN KEY (`id_user`) REFERENCES user (`id`) ON DELETE CASCADE
)";

        if (!$instance->tableExist('articles')) {

            if ($instance->con->query($sql)) {
                echo "Table articles created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table articles already exist" . "\n";
        }

    }

}