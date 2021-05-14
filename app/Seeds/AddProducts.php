<?php


namespace App\Seeds;


use App\Components\Migration;
use App\Models\Product;

class AddProducts extends Migration
{
    public static function AddProducts()
    {
        Product::create(2, "Green Blouse", 45.5, 20, 1, 1, "This is a beautiful blouse", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ");
        Product::create(2, "Black Shorts", 90.2, 15, 0, 1, "This is a beautiful shorts", "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ");
        Product::create(2, "Coral Striped Dress", 110.2, 0, 0, 1, "This is a beautiful stripped dress", "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        Product::create(2, "Peach Dress", 100.8, 5, 1, 1, "This is a beautiful peach dress", "Contrary to popular belief, Lorem Ipsum is not simply random text.");
        Product::create(2, "Plaid Dress", 90.5, 10, 1, 0, "This is a beautiful plaid dress", "It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.");
        Product::create(2, "Green WindBreaker", 130.0, 0, 0, 0, "This is a beautiful green windbreaker", "Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.");
        Product::create(2, "Lilac Trousers", 80.0, 0, 0, 0, "This is a beautiful lilac trousers", "This book is a treatise on the theory of ethics, very popular during the Renaissance. ");
        Product::create(2, "Yellow Bomber", 90.7, 15, 0, 0, "This is a beautiful yellow bomber", "The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.");
        Product::create(2, "Black Blouse", 160.7, 0, 0, 1, "This is a beautiful yellow bomber", "The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.");
        Product::create(2, "Blue Denim Jacket", 130.7, 10, 1, 0, "This is a beautiful blue denim jacket", "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.");
        Product::create(2, "Orange Sweater", 80.2, 0, 0, 0, "This is a beautiful orange sweater", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.");
        Product::create(2, "Black T-shirt", 50.5, 10, 1, 0, "This is a beautiful black T-shirt", "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.");
        Product::create(2, "Denim Short", 80.5, 15, 0, 0, "This is a beautiful denim short", "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.");
        Product::create(2, "Green Shirt-Dress", 100/5, 0, 0, 1, "This is a beautiful green shirt-dress", "Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).");
        Product::create(2, "Brown T-shirt", 60.0, 10, 1, 0, "This is a beautiful brown T-shirt", "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.");
        Product::create(2, "Plaid Blazer", 140.3, 0, 0, 1, "This is a beautiful plaid blazer", "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.");
        Product::create(2, "Lilac Knitted  Suit", 200.0, 10, 1, 0, "This is a beautiful lilac knitted suit", "All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.");
        Product::create(2, "Blue Knitted  Suit", 180.2, 5, 1, 0, "This is a beautiful blue knitted suit", "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.");
        Product::create(2, "Skirt with flowers", 90, 0, 1, 1, "This is a beautiful skirt with flowers", "The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        Product::create(2, "Green Dress", 140.8, 10, 1, 0, "This is a beautiful green dress", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        //21
        Product::create(3, "Gray Jacket", 140.0, 0, 0, 1, "This is a beautiful gray jacket", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        Product::create(3, "Striped Shirt", 90.1, 1, 0, 0, "This is a beautiful striped shirt", "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
        Product::create(3, "Leather Jacket", 180.1, 30, 0, 0, "This is a beautiful leather jacket", "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        Product::create(3, "Navy Jacket", 100.0, 5, 1, 0, "This is a beautiful navy jacket", "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
        Product::create(3, "Blue Jacket", 150.0, 25, 1, 0, "This is a beautiful blue jacket", "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
        Product::create(3, "Dark Gray Jacket", 160.0, 0, 0, 1, "This is a beautiful dark green jacket", "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
        Product::create(3, "Black Jacket", 190.0, 20, 0, 0, "This is a beautiful black jacket", "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
        Product::create(3, "White Denim Jacket", 120.0, 10, 1, 0, "This is a beautiful white denim jacket", "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.");
        Product::create(3, "Green Shorts", 100.5, 0, 0, 1, "This is a beautiful green shorts", "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.");
        Product::create(3, "Striped Shirt", 100.5, 0, 1, 1, "This is a beautiful striped shirt", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.");
        Product::create(3, "Light Gray T-Shirt", 60.5, 1, 1, 0, "This is a beautiful light gray T-shirt", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.");
        Product::create(3, "Green T-Shirt", 60.5, 1, 0, 0, "This is a beautiful green T-shirt", "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.");
        Product::create(3, "Gray Trousers", 80.5, 15, 0, 0, "This is a beautiful gray trousers", "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.");
        Product::create(3, "Dark Blue Trousers", 80.5, 15, 1, 0, "This is a beautiful dark blue trousers", "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.");
        //35
        Product::create(4, "Orange Plaid Shorts", 70.5, 0, 0, 1, "This is a beautiful orange plaid shorts", "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.");
        Product::create(4, "Green Jacket", 110.5, 20, 1, 1, "This is a beautiful green jacket", "Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).");
        Product::create(4, "Burgundy Blouse", 80.5, 0, 0, 0, "This is a beautiful burgundy blouse", "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.");
        Product::create(4, "Orange Skirt", 70.2, 20, 1, 0, "This is a beautiful orange skirt", "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.");
        Product::create(4, "Green Shirt", 60.8, 10, 1, 1, "This is a beautiful green shirt", "All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.");
        Product::create(4, "Light Blue Sweatshirt", 70.5, 0, 0, 0, "This is a beautiful light blue sweatshirt", "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ");
        Product::create(4, "Black Trousers", 110.5, 35, 1, 0, "This is a beautiful black trousers", "The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        Product::create(4, "White Sweatshirt", 40.5, 0, 0, 0, "This is a beautiful white sweatshirt", "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.");
        Product::create(4, "Black Suit", 150.5, 20, 1, 0, "This is a beautiful black suit", "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.");
        Product::create(4, "Denim Jacket", 80.3, 0, 0, 0, "This is a beautiful denim jacket", "All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.");
        Product::create(4, "Yellow Blouse", 40.3, 0, 0, 0, "This is a beautiful yellow blouse", "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.");
        Product::create(4, "Green Shorts", 70.8, 0, 0, 0, "This is a beautiful green shorts", "The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        Product::create(4, "Yellow Blouse", 60.8, 15, 1, 0, "This is a beautiful yellow blouse", "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.");
        Product::create(4, "Dark Gray Trousers", 90.8, 20, 1, 0, "This is a beautiful dark gray trousers", "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.");
        Product::create(4, "Coral Sweatshirt", 60.2, 0, 0, 0, "This is a beautiful coral sweatshirt", "All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.");
        Product::create(4, "Pink Overalls", 100.2, 15, 0, 0, "This is a beautiful pink overalls", "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.");
        Product::create(4, "Denim Shorts", 80.2, 35, 1, 0, "This is a beautiful denim shorts", "The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        Product::create(4, "Black Dress", 105.2, 0, 0, 0, "This is a beautiful black dress", "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.");


        echo "Products added successfully<br>";
    }
}