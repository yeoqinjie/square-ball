<?php
    session_start();
    include('app/UserManager.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = UserManager::register($email, $password);
        if ($user == 0) {
            header("Location: login.php");
        } else {
            header("Location: error.php?error=" . htmlentities("User Exists"));
        }
    }