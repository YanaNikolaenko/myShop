<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\Authors;

class AddAuthors extends Migration
{
    public static function AddAuthors()
    {
        Authors::create('Yana1994');
        Authors::create('Admin');
        Authors::create('Muhammed1991');
        Authors::create('Igor');
        Authors::create('Anna');
        Authors::create('John1980');
        Authors::create('Mike1990');
        Authors::create('Nina');
        Authors::create('Bob Marley');
        Authors::create('Vasya1988');
        echo "Authors added successfully<br>";
    }

}