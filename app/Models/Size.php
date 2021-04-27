<?php

namespace App\Models;

use App\Components\Db;
use PDO;

/**
 * Class Size
 * @package App\Models
 */
class Size
{
    /**
     * @return array
     */
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM sizes");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $title
     * @return bool
     */
    public static function create($title)
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO sizes (title) VALUES (:title)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        return $result->execute();
    }

}