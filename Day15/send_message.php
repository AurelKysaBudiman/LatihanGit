<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $message = $_POST['message'];

    // Query untuk menyimpan pesan
    $sql = "INSERT INTO messages (user_id, message) VALUES ('$user_id', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Terkirim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pesan Anda Telah Terkirim</h1>
        <a href="index.php">Kembali ke Halaman Utama</a>
    </header>
</body>
</html>
