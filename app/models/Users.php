<?php

namespace App\Models;

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
        $result = $stmt->execute([$username, $hashedPassword, $email]);
        if (!$result) {
            var_dump($stmt->errorInfo());
        }
    }
}
