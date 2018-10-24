<?php
    session_start();
    include('app/UserManager.php');

    $login = null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = UserManager::login($email, $password);
        // print $login;

        if ($login) {
            $user = UserManager::get_by_email($email);
            $_SESSION['user'] = serialize($user);
            $_SESSION['is_logged_in'] = true;
            header("Location: userhome.php");
        } elseif (!$login) {
            header("Location: error.php?msg=" . htmlentities("You have entered the wrong password."));
        } elseif ($login == 2) {
            header("Location: error.php?msg=" . htmlentities("There is no such user."));
        }
    } else {
        header("Location: login.php");
    }
