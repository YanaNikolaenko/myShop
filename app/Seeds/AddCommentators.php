<?php


namespace App\Seeds;

use App\Components\Migration;
use App\Models\Commentators;

class AddCommentators extends Migration
{
    public static function AddCommentators()
    {
        Commentators::create('Inna1994', 'inna@mail.com');
        Commentators::create('Vanya', 'vanya19@gmail.com');
        Commentators::create('Eto_ya', 'eto_ya@inbox.ru');
        Commentators::create('Alex', 'alex@gmail.com');
        Commentators::create('Andrey', 'andrei@gmail.com');
        Commentators::create('Uno-uno', 'uno-uno@mail.com');
        echo "Commentators added successfully<br>";
    }

}