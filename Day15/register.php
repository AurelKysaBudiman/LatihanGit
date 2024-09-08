<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pendaftaran Sekolah</h1>
        <form action="register_process.php" method="POST"> <!-- Langsung ke register_process.php -->
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Alamat:</label>
            <textarea id="address" name="address" required></textarea>

            <button type="submit">Daftar</button>
        </form>
    </header>
</body>
</html>
