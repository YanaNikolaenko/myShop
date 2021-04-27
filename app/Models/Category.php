<?php


namespace App\Models;


use App\Components\Db;
use PDO;
/**
 * Class Category
 * @package App\Models
 */
class Category
{
    /**
     * @return array
     */
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM categories");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $title
     * @param $description
     * @return bool
     */
    public static function create($title, $description)
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO categories (title, description) VALUES (:title, :description)";
        $result = $connect->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function selectCategoryById($id)
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT title, description FROM categories WHERE id = $id");
        return $results->fetch(PDO::FETCH_ASSOC);
    }


}