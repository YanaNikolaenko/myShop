<?php

namespace App\Controllers;

use App\Models\User;

class ServerController
{

    public function accessDenied()
    {

        require VIEW_ROOT . "users/list.php";
    }


}
