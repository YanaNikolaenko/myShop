<?php


namespace App\Models;


use App\Components\Db;
use PDO;

/**
 * Class Image
 * @package App\Models
 */
class Image
{
    /**
     * @return array
     */
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM images");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $url
     * @param $id_products
     * @return bool
     */
    public static function create(string $url, int $id_products) : bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO images (url, id_products) VALUES (:url, :id_products)";
        $result = $connect->prepare($sql);
        $result->bindParam(':url', $url, PDO::PARAM_STR);
        $result->bindParam(':id_products', $id_products, PDO::PARAM_INT);
        return $result->execute();
    }
}