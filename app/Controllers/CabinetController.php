<?php

namespace App\Controllers;

use App\Components\Session;
use App\Models\User;

/**
 * Class CabinetController
 * @package App\Controllers
 */
class CabinetController
{
    /**
     * This is a function for working with a profile
     */
    public function profile()
    {
        if ($email = Session::get('email')) {
            $user = User::selectByEmail($email);
        } else {
            header('Location: login');
        }

        require VIEW_ROOT . "cabinet/profile.php";
    }
}
