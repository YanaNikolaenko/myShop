<?php


namespace App\Seeds;

use App\Components\Migration;
use App\Models\Comments;

class AddComments extends Migration
{
    public static function AddComments()
    {
        Comments::create('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 1);
        Comments::create('It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, 1);
        Comments::create('It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages', 3, 1);

        Comments::create('And more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 2);
        Comments::create('Contrary to popular belief, Lorem Ipsum is not simply random text.', 5, 2);

        Comments::create('It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 6, 3);
        Comments::create('Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 1, 3);
        Comments::create('Literature, discovered the undoubtable source.', 3, 3);

        Comments::create('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', 2, 4);
        Comments::create('Literature, discovered the undoubtable source.', 3, 4);
        Comments::create('If you are going to use a passage of Lorem Ipsum, you need to be sure there', 4, 4);
        Comments::create('Contrary to popular belief, Lorem Ipsum is not simply random text', 5, 4);

        Comments::create('It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 1, 5);
        Comments::create('Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 6, 5);
        Comments::create('Literature, discovered the undoubtable source.', 3, 5);

        Comments::create('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 5, 6);
        Comments::create('Literature, discovered the undoubtable source.', 2, 6);

        Comments::create('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, 7);

        Comments::create('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 8);
        Comments::create('Literature, discovered the undoubtable source.', 4, 8);

        Comments::create('Literature, discovered the undoubtable source.', 1, 9);
        Comments::create('If you are going to use a passage of Lorem Ipsum, you need to be sure there', 2, 9);
        Comments::create('Contrary to popular belief, Lorem Ipsum is not simply random text', 3, 9);

        Comments::create('Contrary to popular belief, Lorem Ipsum is not simply random text.', 1, 10);

        echo "Comments added successfully<br>";
    }

}