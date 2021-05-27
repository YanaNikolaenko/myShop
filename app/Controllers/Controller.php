<?php

namespace App\Controllers;

use App\Models\Auth;
use App\Models\User;

class Controller
{
    /**
     * Возвращает либо данные пользователя, либо false
     * @var User | null
     */
    protected $auth;

    public function __construct()
    {
        $this->auth = Auth::getUser();
    }


}