<?php


namespace App\Models;


use App\Components\Db;
use PDO;

/**
 * Class Color
 * @package App\Models
 */
class Color
{
    /**
     * @return array
     */
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM colors");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $title
     * @param $hex
     * @return bool
     */
    public static function create($title, $hex)
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO colors (title, hex) VALUES (:title, :hex)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':hex', $hex, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getByIdProduct(string $id) : array
    {
        $id = intval($id);
        $connect = Db::getConnection();
        $colors = $connect->query("SELECT colors.title as `title`, colors.hex as `hex` FROM `colors` JOIN color_product ON color_product.id_colors = colors.id WHERE color_product.id_products = $id");
        $result = array();
        $i = 0;
        foreach ($colors->fetchAll(PDO::FETCH_ASSOC) as $color)
        {
            $result[$i] = $color['title'];
            $i++;
        }
        return $result;
    }
}