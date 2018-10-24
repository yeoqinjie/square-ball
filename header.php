<?php
// session
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
  
    <nav class="navbar navbar-light bg-light">
        <?php 
        // 
        if ($_SESSION['is_logged_in']) {
        ?>
        <a class="navbar-brand" href="#">
            Logged In Menu
        </a>
            <?php if ($user->is_admin) { ?>
                <a class="navbar-brand" href="#">
                    Admin Logged In Menu
                </a> 
            <?php } ?>
        <?php } else { ?>
        <a class="navbar-brand" href="#">
            Not Logged In Menu
        </a>
        <?php } ?>
    </nav>
    <div class="container">