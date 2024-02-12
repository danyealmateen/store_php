<?php

use App\Models\Database;
use App\Models\Users;

$database = new Database();
$db = $database->getConnection();

$users = new Users($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if (isset($_POST['create_user'])) {
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];
        $inputEmail = $_POST['email'];

        $createNewUser = $users->createUser($inputUsername, $inputPassword, $inputEmail);

        if ($createNewUser) {
            echo 'User successfully created';
        } else {
            echo 'Failed to create user';
        }
    } else if (isset($_POST['add_to_cart']));
}
