<?php
    include_once "mysqlConnection.php";

    $id = $_GET["id"];

    $result = $conn->query("SELECT * FROM phone_book.phonebook WHERE id = $id;");

    $row = $result->fetch_assoc();
    
    echo json_encode($row);
    
    $conn->close();
?>