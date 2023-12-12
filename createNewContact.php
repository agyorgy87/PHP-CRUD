<?php
    include_once "mysqlConnection.php";

    $data = json_decode(file_get_contents("php://input"));

    $name = $data->name;
    $phoneNumber = $data->phoneNumber;
    $sql = "INSERT INTO phonebook (phone_book_name, phone_book_number) VALUES ('$name', $phoneNumber)";
    $successMessage = ["message"=>"success"];
    $errorMessage = ["message"=>"error"];

    if ($conn->query($sql) === TRUE) {
        echo json_encode($successMessage);
    } else {
        echo json_encode($errorMessage);
    }

    $conn->close();
?>




