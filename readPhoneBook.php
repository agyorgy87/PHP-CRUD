<?php
    include_once "mysqlConnection.php";

    $result = $conn->query("SELECT * FROM phone_book.phonebook;");

    $readData = [];

    while ($row = $result->fetch_assoc()) {
        array_push($readData, $row);
    }
    
    echo json_encode($readData);
    
    $conn->close();
?>