<?php

class HomeModel extends BaseModel
{
    function slider()
    {
        $statement = self::$db->query(
            "SELECT * ".
            "FROM slides");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    function getForMe()
    {
        $statement = self::$db->query(
            "SELECT * ".
            "FROM forme");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    function getCategories()
    {
        $statement = self::$db->query(
            "SELECT * ".
            "FROM categories");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}
