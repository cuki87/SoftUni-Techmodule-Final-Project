<?php

class HomeModel extends BaseModel
{
    function slider(){
        $sliderStatement = self::$db->query(
            "SELECT * ".
            "FROM slides");
        return $sliderStatement->fetch_all(MYSQLI_ASSOC);
    }
    function getForMe()
    {
        $formeStatement = self::$db->query(
            "SELECT * ".
            "FROM forme");
        return $formeStatement->fetch_all(MYSQLI_ASSOC);
    }
    function getCategories()
    {
        $categoriesStatement = self::$db->query(
            "SELECT * ".
            "FROM categories");
        return $categoriesStatement->fetch_all(MYSQLI_ASSOC);
    }
}
