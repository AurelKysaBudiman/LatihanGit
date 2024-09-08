<?php
include('db_connect.php'); // Menghubungkan ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Daftar User yang Sudah Mendaftar</h1>

        <!-- Tombol Register -->
        <a href="register.php" class="btn-register">+ REGISTER</a>

        <!-- Menampilkan daftar user -->
        <?php
        $sql = "SELECT name, email, address FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nama</th><th>Email</th><th>Alamat</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Tidak ada user yang terdaftar.</p>";
        }

        $conn->close();
        ?>
    </header>
</body>
</html>
