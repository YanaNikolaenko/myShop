<?php


namespace App\Migrations;

use App\Components\Migration;

/**
 * Class CreateCommentsTable
 * @package App\Migrations
 */
class CreateCommentsTable extends Migration
{
    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE `comments` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `content` varchar(1000) NOT NULL,
 `id_commentator` int(11) NOT NULL,
 `id_article` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`id_commentator`) REFERENCES commentators (`id`),
 FOREIGN KEY (`id_article`) REFERENCES articles (`id`)
)";

        if (!$instance->tableExist('comments')) {

            if ($instance->con->query($sql)) {
                echo "Table comments created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo, который возращает массив, берем 3 ячейку массива, где содержится сообщение самой ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table comments already exist" . "\n";
        }

    }

}