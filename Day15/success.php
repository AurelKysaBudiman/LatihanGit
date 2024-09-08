<?php
include('db_connect.php');

// Ambil ID user terbaru dari database
$sql = "SELECT id FROM students ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$user_id = $user['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pendaftaran Berhasil</h1>
        <p>Terima kasih telah mendaftar. Kirim pesan kepada kami jika ada yang ingin ditanyakan.</p>

        <!-- Form untuk mengirim pesan -->
        <form action="send_message.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <label for="message">Pesan Anda:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>

        <a href="index.php">Kembali ke Halaman Utama</a>
    </header>
</body>
</html>
