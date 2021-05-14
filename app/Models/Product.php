<?php


namespace App\Models;

use App\Components\Db;
use PDO;

/**
 * Class Product
 * @package App\Models
 */
class Product
{

    /** Функция выводит всю возможную полную информацию обо всех продуктах
     * @return array
     */
    public static function all(): array
    {
        $connect = Db::getConnection();
        $query = $connect->query("SELECT * FROM products");

        $products = [];
        $i=0;
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $product) {
            $products[$i]['id'] = $product['id'];
            $category = Category::getById($product['id_category']);
            $products[$i]['category'] = $category['title'];
            $products[$i]['title'] = $product['title'];
            $products[$i]['price'] = $product['price'];
            $products[$i]['new_price'] = round((float)$product['price'] * (1 - (float)$product['discount']/100), 2);
            $products[$i]['is_sale'] = $product['is_sale'];
            $products[$i]['is_new'] = $product['is_new'];
            $products[$i]['description'] = $product['description'];
            $products[$i]['additional_information'] = $product['additional_information'];
            $products[$i]['images'] = Image::getByIdProduct($product['id']);
            $products[$i]['sizes'] = Size::getByIdProduct($product['id']);
            $products[$i]['colors'] = Color::getByIdProduct($product['id']);
            $i++;
        }
        return $products;
    }

    /** Функция для подсчета количества товаров в категории
     * @param $category
     * @return mixed
     */
    public static function getAmountProductsInCategory($category)
    {
        $connect = Db::getConnection();
        $result = $connect->query("SELECT count(products.id) as count FROM products JOIN categories ON products.id_category = categories.id WHERE categories.title = '$category'");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row['count'];
    }


    /** Функция для создания нового товара в каталоге
     * @param $id_category
     * @param $title
     * @param $price
     * @param $discount
     * @param $is_sale
     * @param $is_new
     * @param $description
     * @param $additional_information
     * @return bool
     */

    public static function create($id_category, $title, $price, $discount, $is_sale, $is_new, $description, $additional_information): bool
    {
        $connect = Db::getConnection();
        $sql = "INSERT INTO products (id_category, title, price, discount, is_sale, is_new, description, additional_information) VALUES (:id_category, :title, :price, :discount, :is_sale, :is_new, :description, :additional_information)";
        $result = $connect->prepare($sql);
        $result->bindParam(':id_category', $id_category, PDO::PARAM_INT);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':price', $price, PDO::PARAM_STR);
        $result->bindParam(':discount', $discount, PDO::PARAM_INT);
        $result->bindParam(':is_sale', $is_sale, PDO::PARAM_INT);
        $result->bindParam(':is_new', $is_new, PDO::PARAM_INT);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':additional_information', $additional_information, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Функция, которая выбирает продукты по категории
     * @param $category
     * @return array
     */

    public static function getByCategory($category): array
    {
        $connect = Db::getConnection();

        $query = $connect->query("SELECT products.id, products.id_category, products.title, products.price, products.discount, products.is_sale, products.is_new, products.description, products.additional_information FROM `products` JOIN categories ON products.id_category = categories.id WHERE categories.title = '$category'");

        $products = [];
        $i=0;
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $product) {
            $products[$i]['id'] = $product['id'];
            $category = Category::getById($product['id_category']);
            $products[$i]['category'] = $category['title'];
            $products[$i]['category_description'] = $category['description'];
            $products[$i]['title'] = $product['title'];
            $products[$i]['price'] = $product['price'];
            $products[$i]['new_price'] = round((float)$product['price'] * (1 - (float)$product['discount']/100), 2);
            $products[$i]['is_sale'] = $product['is_sale'];
            $products[$i]['is_new'] = $product['is_new'];
            $products[$i]['description'] = $product['description'];
            $products[$i]['additional_information'] = $product['additional_information'];
            $images = Image::getByIdProduct($product['id']);
            $products[$i]['image'] = $images[0];
            $i++;
        }
        return $products;
    }


    public static function getById($id)
    {
        $id = (int)$id;
        $connect = Db::getConnection();
        $query = $connect->query("SELECT * FROM products WHERE id = $id");
        $product = $query->fetch(PDO::FETCH_ASSOC);
        $category = Category::getById($product['id_category']);
        $product['category'] = $category['title'];
        $product['new_price'] = round((float)$product['price'] * (1 - (float)$product['discount']/100), 2);
        $product['images'] = Image::getByIdProduct($product['id']);
        $product['sizes'] = Size::getByIdProduct($product['id']);
        $product['colors'] = Color::getByIdProduct($product['id']);
        return $product;
    }
}