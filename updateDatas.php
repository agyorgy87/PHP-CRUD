<?php
    include_once "mysqlConnection.php";

    $data = json_decode(file_get_contents("php://input"));

    $id = $data->id;
    $name = $data->name;
    $phoneNumber = $data->phoneNumber;

    $sql = "UPDATE phonebook SET phone_book_name = '$name', phone_book_number = $phoneNumber WHERE id = $id;";

    $successMessage = ["message"=>"success"];
    $errorMessage = ["message"=>"error"];

    if ($conn->query($sql) === TRUE) {
        echo json_encode($successMessage);
    } else {
        echo json_encode($errorMessage);
    }

    $conn->close();
?>