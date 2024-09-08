<?php
include('db_connect.php'); // Menghubungkan ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesan Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pesan dari Pengguna</h1>

        <!-- Tombol + REGISTER -->
        <a href="register.php" class="btn-register">+ REGISTER</a>

        <!-- Menampilkan daftar pesan dari tabel messages -->
        <?php
        $sql = "SELECT m.message, m.sent_at, s.name, s.email 
                FROM messages m 
                JOIN students s ON m.user_id = s.id 
                ORDER BY m.sent_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nama</th><th>Email</th><th>Pesan</th><th>Dikirim Pada</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td>" . $row['sent_at'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Tidak ada pesan yang diterima.</p>";
        }

        $conn->close();
        ?>
    </header>
</body>
</html>
