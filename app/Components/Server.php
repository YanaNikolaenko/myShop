<?php


namespace App\Components;


class Server
{
    public static function get($key)
    {
         return $_SERVER[$key];
    }
}