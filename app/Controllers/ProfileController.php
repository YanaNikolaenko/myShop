<?php

namespace App\Controllers;

use App\Middleware\UserMiddleware;
use App\Models\Auth;

/**
 * Class ProfileController
 * @package App\Controllers
 */
class ProfileController
{

    public function __construct()
    {
        //Middlewares
        UserMiddleware::isAuthorized('email');
    }


    /**
     * This is a function for working with a profile
     */
    public function profile()
    {
        $user = Auth::getUser();

        require VIEW_ROOT . "profile/profile.php";
    }


}
