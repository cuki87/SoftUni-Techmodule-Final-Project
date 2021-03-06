<?php

class TastyModel extends BaseModel
{
    function index(){
        $statement = self::$db->query(
            "SELECT * ".
            "FROM categories");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    function products(int $cat_id)
    {
        $statement = self::$db->query(
            "SELECT products.id, product_name, product_description, product_picture, categories.cat_name ".
            "FROM categories ".
            "LEFT JOIN products on products.cat_id=categories.id ".
            "WHERE categories.id = " . $cat_id);
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    function productView(int $id)
    {
        $statement = self::$db->query(
            "SELECT products.id, product_name, product_description, product_picture, price, c.cat_name ".
            "FROM products ".
            "LEFT JOIN categories c on cat_id=c.id ".
            "WHERE products.id = " . $id);
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}