<?php

class UsersModel extends BaseModel
{
    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM users where id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function editProfile(int $id, string $password, string $full_name, string $email, string $phone) : bool
    {
       $password_hash = password_hash($password, PASSWORD_DEFAULT);
       $statement = self::$db->prepare("UPDATE users SET password_hash = ?, full_name = ?, email = ?, phone =  ? WHERE id= ?");
       $statement->bind_param("ssssi", $password_hash, $full_name, $email, $phone, $id);
       $statement->execute();
       return $statement->affected_rows >=0;
    }

    public function getAvatar(int $id)
    {
        $statement = self::$db->query("SELECT id, profile_picture FROM users WHERE id= ". $id);
        return $statement->fetch_assoc();
    }

    public function isAdmin(int $id)
    {
        $statement = self::$db->query("SELECT admin FROM users WHERE id= ". $id);
        return $statement->fetch_assoc();
    }
}
