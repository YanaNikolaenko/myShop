<?php


namespace App\Controllers;


use App\Components\Cookie;
use App\Models\Article;
use App\Models\Auth;
use App\Models\BlogCategories;
use App\Models\Category;
use App\Models\Commentators;
use App\Models\Comments;
use App\Models\Menu;
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
        $menu = Menu::all();
        $blogCategories = BlogCategories::all();
        $categories = Category::all();
        $articles = Article::all();
        $user = $this->auth;

        require VIEW_ROOT . "blog/blog.php";
    }

    public function article($id_article)
    {
        $menu = Menu::all();
        $blogCategories = BlogCategories::all();
        $categories = Category::all();
        $article = Article::getById($id_article);
        $user = $this->auth;

        require VIEW_ROOT . "article/article.php";
    }


    public function comment($articleId)
    {
        $errors = null;

        if (server('REQUEST_METHOD') == 'POST') {

            //если в форме заполнены не все поля
            if (empty($_POST['comment']) || empty($_POST['name']) || empty($_POST['email'])) {
                Cookie::set('errors', 'Вы не заполнили все поля', 180);
                //header('Location: ' . server('HTTP_REFERER'));
            }

            //Если авторизованный
            if ($user = $this->auth) {

                $name = sprintf("%s %s", $user['firstname'], $user['lastname']);
                $comment = $_POST['comment'];

                //Валидация
                if (!Comments::checkComment($comment)) $errors[] = "Введен слишком длинный комментарий";

                if (empty($errors)) {
                    //Добавляем коммент
                    $commentator = Commentators::firstOrCreate($name, $user['email']);
                    Comments::create($comment, $commentator['id'], $articleId);
                    header('Location: ' . server('HTTP_REFERER'));
                } else {
                    Cookie::set('errors', $errors, 180);
                    //header('Location: ' . server('HTTP_REFERER'));
                }

            } //Если не авторизованный
            else {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];

                if (!User::checkName($name)) $errors[] = "Имя введено некорректно";
                if (!User::checkEmail($email)) $errors[] = "Электронная почта введена некорректно";
                if (!Comments::checkComment($comment)) $errors[] = "Введен слишком длинный комментарий";

                if (empty($errors)) {
                    $commentator = Commentators::firstOrCreate($name, $email);
                    Comments::create($comment, $commentator['id'], $articleId);
                    header('Location: ' . server('HTTP_REFERER'));
                } else {
                    Cookie::set('errors', $errors, 180);
                    //header('Location: ' . server('HTTP_REFERER'));
                }
            }
        } else {
            redirect(301, '/');
        }
    }
}
