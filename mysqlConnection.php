<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, PATCH, GET, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, X-Api-Key, X-Requested-With, Content-Type, Accept, Authorizatio");

    $servername = "localhost";
    $username = "******";
    $password = "******";
    $dbname = "phone_book";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("failed connection to the database: " . $conn->connect_error);
    }
?>