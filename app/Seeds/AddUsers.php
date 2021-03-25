<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\User;

class AddUsers extends Migration
{
    public static function AddUsers()
    {
        User::create('Yana','Hosroshkova', 'yana@mail.ru','1234', "+375295109267");
        User::create('Muhammed','Abdullayev', 'mukhahmmed@mail.ru','1234', "+375445000000");
        echo "Users added successfully" . "<br>";
    }
}