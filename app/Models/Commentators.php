<?php


namespace App\Models;

use App\Components\Db;
use PDO;


class Commentators
{
    public static function all() : array
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM `commentators`");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function checkEmail($email)
    {
        return preg_match('/.+@.+\..+/', $email);
    }

    public static function create($name, $email): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO commentators (name, email) VALUES (:name, :email)";
        $result = $connect->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        return $result->execute();
    }

}