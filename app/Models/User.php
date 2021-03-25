<?php

namespace App\Models;

use App\Components\Db;
use App\Components\Session;
use PDO;

/**
 * Class User
 * @package App\Models
 */
class User
{

    /**
     * @return array
     */
    public static function all()
    {
        $connect = Db::getConnection();

        $results = $connect->query("SELECT id, firstname, lastname, email, phone FROM user");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    //валидации
    public static function checkName($name)
    {
        return preg_match('/^[а-яА-ЯёЁa-zA-Z]{2,15}$/u', $name);
    }

    public static function checkEmail($email)
    {
        return preg_match('/.+@.+\..+/', $email);
    }

    public static function checkPassword($password)
    {
        return preg_match('/[a-zA-Z0-9]{5,10}/', $password);
    }

    /**
     * @param $phone
     * @return false|int
     */
    public static function checkPhone($phone)
    {
        return preg_match('/^\+375[29,33,44,25]{2,2}[0-9]{7,7}$/', $phone);
    }

    /**
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $password
     * @return bool
     */
    public static function create($firstname, $lastname, $email, $password, $phone)
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO user (firstname, lastname, email, password, phone) VALUES (:firstname, :lastname, :email, :password, :phone)";
        $result = $connect->prepare($sql);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo который возращает нам массив, берем 3 ячейку массива где содержиться сообщение об ошибки и выводим ее
        return $result->execute(); //выполнение запроса
    }

    /**
     * @param $email
     * @return mixed
     */

    public static function selectByEmail($email)
    {
        $connect = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email';
        $result = $connect->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        return $result->fetch();
    }


    public static function isAuthorized(){
        if(!Session::get('user')){
            redirectError(403);
        };
    }


    public static function update($firstname, $lastname, $email, $password, $phone)
    {
        $connect = Db::getConnection();

        $user = User::selectByEmail($email);

        $sql = 'UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, phone = :phone WHERE id = :user_id;';
        $result = $connect->prepare($sql);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':user_id', $user['id'], PDO::PARAM_INT);

        return $result->execute();
    }


}
