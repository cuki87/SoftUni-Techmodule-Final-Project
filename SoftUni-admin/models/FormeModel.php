<?php

class FormeModel extends BaseModel
{
    public function getForMe()
    {
        $statement = self::$db->query("SELECT * FROM forme");
        return $statement->fetch_assoc();
    }

    public function changePhoto(string $photo)
    {
        $statement = self::$db->prepare("UPDATE forme SET forme_photo = ?");
        $statement->bind_param("s", $photo);
        $statement->execute();
        return $statement->affected_rows >=0;
    }
    public function editForMe(string $content)
    {
        $statement = self::$db->prepare("UPDATE forme SET text = ?");
        $statement->bind_param("s", $content);
        $statement->execute();
        return $statement->affected_rows >=0;
    }
}
