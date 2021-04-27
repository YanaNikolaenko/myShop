<?php


namespace App\Models;


use App\Components\Db;
use PDO;

/**
 * Class ProductSize
 * @package App\Models
 */
class ProductSize
{
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM product_size");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id_sizes
     * @param int $id_products
     * @return bool
     */
    public static function create(int $id_products, int $id_sizes) : bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO product_size (id_products, id_sizes) VALUES (:id_products, :id_sizes)";
        $result = $connect->prepare($sql);
        $result->bindParam(':id_products', $id_products, PDO::PARAM_INT);
        $result->bindParam(':id_sizes', $id_sizes, PDO::PARAM_INT);
        return $result->execute();
    }
}