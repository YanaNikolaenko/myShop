<?php


namespace App\Controllers;


class ContactController
{
    public function index()
    {
        require VIEW_ROOT . "parts/contact/contact.php";
    }
}