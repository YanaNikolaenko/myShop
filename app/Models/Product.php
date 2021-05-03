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
        $query = $connect->query("SELECT categories.title as category, categories.description as category_descr, products.title as product, products.price as price, products.is_sale, products.is_new, products.description, products.additional_information, sizes.title as size_product, images.url as image, colors.title as color, colors.hex FROM products JOIN categories ON categories.id = products.id_category JOIN images ON images.id_products = products.id JOIN product_size ON products.id = product_size.id_products JOIN sizes ON sizes.id = product_size.id_sizes JOIN color_product ON color_product.id_products = products.id JOIN colors ON colors.id = color_product.id_colors");
        $products = [];

//        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $product) {
//            $products['id'] = $product['id'];
//            $products['category'] = Category::getById($product['category_id)]);
//            $products['images'] = ProductImage::getById($product['category_id)]);
//        }


      //  return $results->fetchAll(PDO::FETCH_ASSOC);
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

    /** Функция, которая выбирает все продукты из каталога
     * @return array
     */
    public static function selectAllProducts(): array
    {
        $connect = Db::getConnection();

        $result = $connect->query('SELECT products . title as product, products . price as old_price, ROUND((products . price * (100 - products . discount)) / 100, 2) as new_price, products . is_sale, products . is_new, images . url FROM products JOIN images ON images . id_products = products . id JOIN categories ON categories . id = products . id_category');
        $products = $result->fetchAll(PDO::FETCH_ASSOC);//в products массив всех записей

        $count_img = count($products);//считает общее количество записей в результате запроса


        for ($i = 0, $j = 0; $i <= $count_img - 3; $i += 3)//итерации цикла с шагом в 3, т.к. на каждый продукт есть 3 фото, а для для каталога мы выводим первую из трёх
        {
            $catalog[$j] = $products[$i];
            $j++;
        }
        return $catalog;
    }

    /** Функция, которая выбирает продукты по категории
     * @param $category
     * @return array
     */
    public static function getProductsByCategory(string $category): array
    {
        $connect = Db::getConnection();

        $result = $connect->prepare('SELECT products . title as product, products . price as old_price, ROUND((products . price * (100 - products . discount)) / 100, 2) as new_price, products . is_sale, products . is_new, images . url FROM products JOIN images ON images . id_products = products . id JOIN categories ON categories . id = products . id_category WHERE categories . title = :category');
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->execute();
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        $count_img = count($products);

        $j = 0;
        for ($i = 0; $i <= $count_img - 3; $i += 3) {
            $catalog[$j] = $products[$i];
            $j++;
        }
        return $catalog;
    }


    public static function getProductById($id)
    {
        $id = intval($id);

        $connect = Db::getConnection();
        $result = $connect->query('SELECT products . id, categories . title as category, products . title as product, products . price as old_price, ROUND((products . price * (100 - products . discount)) / 100, 2) as new_price, products . is_sale, products . is_new, products . description, products . additional_information, images . url FROM products JOIN images ON images . id_products = products . id JOIN categories ON categories . id = products . id_category WHERE products . id = ' . $id);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}