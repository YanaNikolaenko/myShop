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

class BlogController extends Controller
{
    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $blogCategories = BlogCategories::all();
        $categories = Category::all();
        $articles = Article::all();
        $user = $this->auth;

        require VIEW_ROOT . "blog/blog.php";
    }

    public function article($id_article)
    {
        $blogCategories = BlogCategories::all();
        $categories = Category::all();
        $article = Article::getById($id_article);
        $user = $this->auth;

        require VIEW_ROOT . "article/article.php";
    }


    public function comment($articleId)
    {

        if (server('REQUEST_METHOD') == 'POST') {

            //Если авторизованный
            if (Auth::isAuthorized()) {

                $user = Auth::getUser();
                $name = sprintf("%s %s", $user['firstname'], $user['lastname']);
                $comment = $_POST['comment'];


                $errors = null;

                //Вадидация
                if (!Comments::checkComment($comment)) $errors[] = "Введен слишком длинный комментарий";


                if (empty($errors)) {

                    //Добавляем коммент
                    if (Commentators::create($name, $user['email'])) {
                        $commentator = Commentators::getByEmail($user['email']);//выбираю данные по email (поле unique)
                        Comments::create($comment, $commentator['id'], $articleId);
                        header('Location: ' . server('HTTP_REFERER'));
                    }
                } else {
                    Session::set('errors', $errors);
                }


            } //Если не авторизованный
            else {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];

                $errors = null;//создаю пустой массив, где будут хранится ошибки при вводе некорректных данных в поля регистрации
                if (!User::checkName($name)) $errors[] = "Имя введено некорректно";
                if (!User::checkEmail($email)) $errors[] = "Электронная почта введена некорректно";
                if (!Comments::checkComment($comment)) $errors[] = "Введен слишком длинный комментарий";

                if (empty($errors)) {
                    if (Commentators::create($name, $email)) {
                        $commentator = Commentators::getByEmail($email);//выбираю данные по email (поле unique)
                        Comments::create($comment, $commentator['id'], $articleId);
                        header('Location: ' . server('HTTP_REFERER'));
                    }
                } else {
                    Session::set('errors', $errors);
                }
            }
        } else {
            redirect(301, "/");
        }
    }
}