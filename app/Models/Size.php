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

    public static function getByIdProduct(string $id) : array
    {
        $id = intval($id);
        $connect = Db::getConnection();
        $sizes = $connect->query("SELECT sizes.title FROM `sizes` JOIN product_size ON product_size.id_sizes = sizes.id WHERE product_size.id_products = $id");
        $result = array();
        $i = 0;
        foreach ($sizes->fetchAll(PDO::FETCH_ASSOC) as $size)
        {
            $result[$i] = $size['title'];
            $i++;
        }
        return $result;
    }

}