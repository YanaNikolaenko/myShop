<?php


namespace App\Controllers;


use App\Components\Session;
use App\Models\Article;
use App\Models\Auth;
use App\Models\BlogCategories;
use App\Models\Category;
use App\Models\Commentators;
use App\Models\Comments;
use App\Models\User;

class BlogController
{
    public function index()
    {
        $blogCategories = BlogCategories::all();
        $categories = Category::all();
        $articles = Article::all();

        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }

        require VIEW_ROOT . "blog/blog.php";
    }

    public function article($id_article)
    {
        $blogCategories = BlogCategories::all();
        $categories = Category::all();
        $article = Article::getById($id_article);

        if(Auth::isAuthorized())
        {
            $user = Auth::getUser();
        }
        require VIEW_ROOT . "article/article.php";
    }


    public function comment()
    {
        if(server('REQUEST_METHOD') == 'POST') {

            if (Auth::isAuthorized()) {
                $user = Auth::getUser();
                $name = $user['firstname'] . " " . $user['lastname'];
                $comment = $_POST['comment'];
                $url_array = explode('/', $_SERVER['HTTP_REFERER']);
                $id_article = array_pop($url_array);

                $errors = null;
                if (!Comments::checkComment($comment)) $errors[] = "Введен слишком длинный комментарий";

                if (empty($errors)) {
                    if (Commentators::create($name, $user['email'])) {
                        $commentator = Commentators::getByEmail($user['email']);//выбираю данные по email (поле unique)
                        Comments::create($comment, $commentator['id'], $id_article);
                        header('Location: ' . server('HTTP_REFERER'));
                    }
                } else {
                    Session::set('errors', $errors);
                }
            } else {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];
                $url_array = explode('/', $_SERVER['HTTP_REFERER']);
                $id_article = array_pop($url_array);

                $errors = null;//создаю пустой массив, где будут хранится ошибки при вводе некорректных данных в поля регистрации
                if (!User::checkName($name)) $errors[] = "Имя введено некорректно";
                if (!User::checkEmail($email)) $errors[] = "Электронная почта введена некорректно";
                if (!Comments::checkComment($comment)) $errors[] = "Введен слишком длинный комментарий";

                if (empty($errors)) {
                    if (Commentators::create($name, $email)) {
                        $commentator = Commentators::getByEmail($email);//выбираю данные по email (поле unique)
                        Comments::create($comment, $commentator['id'], $id_article);
                        header('Location: ' . server('HTTP_REFERER'));
                    }
                } else {
                    Session::set('errors', $errors);
                }
            }
        }
        else
            {
                redirect(301, "/");
            }
        }
}