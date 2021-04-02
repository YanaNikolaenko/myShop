<?php


namespace App\Models;

use App\Components\Db;
use PDO;

/**
 * Class Slider
 * @package App\Models
 */
class Slider
{
    /**
     * This is a function to show all users
     * @return array
     */
    public static function all()
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM slider");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($title, $subtitle, $image, $label, $link, $big_style, $medium_style, $small_style)
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO slider (title, subtitle, image, label, link, big_style, medium_style, small_style) VALUES (:title, :subtitle, :image, :label, :link, :big_style, :medium_style, :small_style)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':subtitle', $subtitle, PDO::PARAM_STR);
        $result->bindParam(':image', $image, PDO::PARAM_STR);
        $result->bindParam(':label', $label, PDO::PARAM_STR);
        $result->bindParam(':link', $link, PDO::PARAM_STR);
        $result->bindParam(':big_style', $big_style, PDO::PARAM_STR);
        $result->bindParam(':medium_style', $medium_style, PDO::PARAM_STR);
        $result->bindParam(':small_style', $small_style, PDO::PARAM_STR);
        return $result->execute();

    }

    public static function selectById($id)
    {
        $connect = Db::getConnection();

        $sql = 'SELECT * FROM slider WHERE id = :id';
        $result = $connect->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

}