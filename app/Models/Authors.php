<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class Authors
{

    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM authors");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function create($name): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO authors (name) VALUES (:name)";
        $result = $connect->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getById($id) : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT name FROM authors WHERE id = $id");
        return $results->fetch(PDO::FETCH_ASSOC);
    }

}