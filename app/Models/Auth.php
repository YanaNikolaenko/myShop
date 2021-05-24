<?php

namespace App\Models;

use App\Components\Db;
use App\Components\Session;
use PDO;

/**
 * Class User
 * @package App\Models
 */
class Auth
{
    public static function logout()
    {
        Session::delete('email');
    }

    /**
     * @return mixed
     */
    public static function getUser()
    {
        return User::getByEmail(Session::get('email'));
    }

    /**
     * @return bool
     */
    public static function isAuthorized() : bool
    {
        return Session::get('email') ? true : false;
    }
}
