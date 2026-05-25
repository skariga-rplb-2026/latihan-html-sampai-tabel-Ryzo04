<?php
session_start();

header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if(!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("location:index.php?p=Anda harus login terlebih dahulu");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Halaman Home</title>
</head>
<body>
    <?php include 'navigasi.php'; ?>

    <div id="main">
        <div class="container">
            <h2>APLIKASI</h2>
            <hr>
            <p>Selamat datang di aplikasi</p>
        </div>
    </div>
</body>
</html>