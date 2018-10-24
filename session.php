<?php
    session_start();

    if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
        include_once('app/User.php');
        if (isset($_SESSION['user'])) {
            global $user;
            $user = unserialize($_SESSION['user']);
        }
    }
