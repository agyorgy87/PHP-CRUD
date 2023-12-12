<?php
    include_once "mysqlConnection.php";

    if ($_SERVER["REQUEST_METHOD"] === "DELETE") {

        $id = $_GET["id"];

        $sql = "DELETE FROM phonebook WHERE id = $id";

        $successMessage = ["message" => "success"];
        $errorMessage = ["message" => "error"];

        if ($conn->query($sql) === TRUE) {
            echo json_encode($successMessage);
        } else {
            echo json_encode($errorMessage);
        }
    }

    $conn->close();
?>