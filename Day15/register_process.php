<?php
include('db_connect.php'); // Tanpa folder

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (name, email, address) VALUES ('$name', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.php"); // Langsung ke success.php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
