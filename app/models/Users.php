<?php

class Users
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function createUser($username, $password, $email)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");

        return $stmt->execute([$username, $hashedPassword, $email]);
    }
}

$users = new Users($db);
$createNewUser = $users->createUser($inputUsername, $inputPassword, $inputEmail);
