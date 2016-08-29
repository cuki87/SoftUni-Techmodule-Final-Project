<?php

class UsersModel extends BaseModel
{
    public function getUsers()
    {
        $statement = self::$db->query("SELECT * FROM users");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM users where id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function addUser(string $username, string $password, string $fullName, string $email, string $phone, string $profilePic, $admin)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $statement = self::$db->prepare(
            "INSERT INTO users (username, password_hash, full_name, email, phone, profile_picture, admin) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $statement->bind_param("sssssss", $username, $password_hash, $fullName, $email, $phone, $profilePic, $admin);
        $statement->execute();
        if($statement->affected_rows != 1)
            return false;
        $user_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
        return $user_id;
    }

    public function editUser(int $id, string $username, string $full_name, string $email, string $phone, string $profilePic, $admin) : bool
    {
       $statement = self::$db->prepare("UPDATE users SET username = ?, full_name = ?, email = ?, phone =  ?, profile_picture = ?, admin = ? WHERE id= ?");
       $statement->bind_param("ssssssi", $username, $full_name, $email, $phone, $profilePic, $admin, $id);
       $statement->execute();
       return $statement->affected_rows >=0;
    }

    public function deleteUser(int $id) : bool
    {
        $statement = self::$db->prepare("DELETE FROM users WHERE id=?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
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
