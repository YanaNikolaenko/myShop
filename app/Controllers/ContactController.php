<?php


namespace App\Controllers;


class ContactController extends Controller
{
    public function index()
    {
        require VIEW_ROOT . "parts/contact/contact.php";
    }
}