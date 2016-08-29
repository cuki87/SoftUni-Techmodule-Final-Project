<?php

class ProductsModel extends BaseModel
{
    public function getProducts()
    {
        $statement = self::$db->query("
        SELECT products.id, product_name, product_description, product_picture, price, cat_name ".
        "FROM products ".
        "LEFT JOIN categories ON cat_id=categories.id ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function addProduct(string $name, string $description, string $price, string $picture, int $catID) : bool
    {
        $statement = self::$db->prepare("INSERT INTO products(product_name, product_description, price, product_picture, cat_id) VALUES (?, ?, ?, ?, ?)");
        $statement->bind_param("ssssi", $name, $description, $price, $picture, $catID);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT products.id, product_name, product_description, product_picture, price, cat_id, cat_name ".
            "FROM products ".
            "LEFT JOIN categories ON cat_id=categories.id ".
            "WHERE products.id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }
    public function getCategories()
    {
        $statement = self::$db->query("SELECT id, cat_name FROM categories");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    public function editProduct(int $id, string $name, string $description, string $picture, string $price, int $cat_id) : bool
    {
        $statement = self::$db->prepare("UPDATE products SET product_name = ?, product_description = ?, product_picture = ?, price = ?, cat_id = ? WHERE id= ?");
        $statement->bind_param("ssssii", $name, $description, $picture, $price, $cat_id, $id);
        $statement->execute();
        return $statement->affected_rows >=0;
    }

    public function deleteProduct(int $id) : bool
    {
        $statement = self::$db->prepare("DELETE FROM products WHERE id=?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}
