<?php

function connect_pdo() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php";
    $dbh = "";
    try {
      $dbh = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $dbh;
}


