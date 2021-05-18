<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\User;

class AddUsers extends Migration
{
    public static function AddUsers()
    {
        $names = array('Yana', 'Muhammed', 'Igor', 'Evgeniy', 'Oleg', 'Inna', 'Anna', 'Viktoria', 'Nadezhda', 'Marina', 'Yulia');
        $lastnames = array ('Nikolaenko', 'Abdullaev', 'Plaksa', 'Ivanov', 'Petrov', 'Bondarenko', 'Yakovleva', 'Kravtsova', 'Petrova', 'Ivanova', 'Sidorova');
        $emails = array('12a@mail.ru', 'bla-bla@gmail.com', 'brs@index.ru', 'mamama@gmail.com', 'uaua@mail.ru', 'vvv@mail.ru', 'www123@gmail.com', 'myemail@mail.ru', 'ololo@inbox.ru', 'mynewemail@gmail.com', 'yanik@mail.ru');
        $phones = array('+375445109267', '+375295109267', '+375336000000', '+375441054120', '+375290000000', '+375441329587', '+375332148596', '+375448269510', '+375336954128', '+375448215649', '+375295189542');

        for ($i=0; $i<count($emails);$i++)
        {
            User::create("$names[$i]", "$lastnames[$i]", "$emails[$i]", '12345', "$phones[$i]");
        }
        echo "Users added successfully" . "<br>";
    }
}