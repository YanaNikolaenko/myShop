<?php


namespace App\Models;

use App\Components\Db;
use PDO;

/**
 * Class ColorProduct
 * @package App\Models
 */
class ColorProduct
{
    /**
     * @return array
     */
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM color_product");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id_products
     * @param int $id_colors
     * @return bool
     */
    public static function create(int $id_products, int $id_colors) : bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO color_product (id_products, id_colors) VALUES (:id_products, :id_colors)";
        $result = $connect->prepare($sql);
        $result->bindParam(':id_products', $id_products, PDO::PARAM_INT);
        $result->bindParam(':id_colors', $id_colors, PDO::PARAM_INT);
        return $result->execute();
    }


}