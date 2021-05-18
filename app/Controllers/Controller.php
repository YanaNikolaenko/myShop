<?php

namespace App\Controllers;

use App\Models\Auth;
use App\Models\User;

class Controller
{
    /**
     * @var User | null
     */
    protected $auth;

    public function __construct()
    {
        $this->auth = Auth::getUser();
    }


}