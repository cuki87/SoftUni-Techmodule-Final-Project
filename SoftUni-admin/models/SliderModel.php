<?php

class SliderModel extends BaseModel
{
    public function getSlides()
    {
        $statement = self::$db->query("SELECT * FROM slides");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM slides where id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function addSlide(string $slide) : bool
    {
        $statement = self::$db->prepare("INSERT INTO slides(slide) VALUES (?)");
        $statement->bind_param("s", $slide);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function deleteSlide(int $id)
    {
        $statement = self::$db->prepare("DELETE FROM slides WHERE id=?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}
