<?php

namespace App\Controllers;

use App\Components\Session;
use App\Models\User;

class UserController
{

    public function list()
    {
        $usersList = User::all();
        require VIEW_ROOT . "users/list.php";
    }


    public function create()
    {
        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
        }

        $errors = [];
        if (!User::checkName($firstname)) $errors[] = "Имя введено некорректно";
        if (!User::checkName($lastname)) $errors[] = "Фамилия введена некорректно";
        if (!User::checkEmail($email)) $errors[] = "Электронная почта введена некорректно";
        if (!User::checkPassword($password)) $errors[] = "Пароль введен некорректно";
        if (!User::checkPhone($phone)) $errors[] = "Телефон введен некорректно";


        if (empty($errors)) {
            $user = User::create($firstname, $lastname, $email, $password, $phone);
            Session::set('user', $user['id']);
        }


        require VIEW_ROOT . "users/login.php";
    }


}
