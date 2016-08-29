<?php

class CategoriesModel extends BaseModel
{
    public function getCategories(){
        $statement = self::$db->query("
        SELECT * FROM categories");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function addCategory(string $name, string $description, string $picture) : bool
    {
        $statement = self::$db->prepare("INSERT INTO categories(cat_name, cat_description, cat_picture) VALUES (?, ?, ?)");
        $statement->bind_param("sss", $name, $description, $picture);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM categories where id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function editCategory(int $id, string $name, string $description, string $picture) : bool
    {
        $statement = self::$db->prepare("UPDATE categories SET cat_name = ?, cat_description = ?, cat_picture = ? WHERE id= ?");
        $statement->bind_param("sssi", $name, $description, $picture, $id);
        $statement->execute();
        return $statement->affected_rows >=0;
    }

    public function deleteCategory(int $id) : bool
    {
        $statement = self::$db->prepare("DELETE FROM categories WHERE id=?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}
