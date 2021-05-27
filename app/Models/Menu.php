<?php


namespace App\Models;

use App\Components\Db;
use PDO;
/**
 * Class Menu
 * @package App\Models
 */
class Menu
{
    /**
     * @return array
     */
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM menu");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $title
     * @param $url
     * @return bool
     */
    public static function create($title, $url) : bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO menu (title, url) VALUES (:title, :url)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':url', $url, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getById($id)
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM menu WHERE id = $id");
        return $results->fetch(PDO::FETCH_ASSOC);
    }


}