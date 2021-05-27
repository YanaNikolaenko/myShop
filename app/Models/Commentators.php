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

    /**
     * @param $name
     * @param $email
     * @return mixed
     */
    public static function firstOrCreate($name, $email)
    {
        $connect = Db::getConnection();
        $result = $connect->query("SELECT * FROM `commentators` WHERE email = '$email'");
        $exist = $result->fetch(PDO::FETCH_ASSOC);
        if(!$exist)
        {
            $result = $connect->prepare("INSERT INTO commentators (name, email) VALUES (:name, :email)");
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->execute();
            $result = $connect->query("SELECT * FROM `commentators` WHERE email = '$email'");
            $exist = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $exist;
    }

    public static function getByEmail($email)
    {
        $connect = Db::getConnection();
        $results = $connect->query("SELECT * FROM commentators WHERE email = '$email'");
        return $results->fetch(PDO::FETCH_ASSOC);
    }
}