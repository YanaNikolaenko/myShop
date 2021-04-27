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


}