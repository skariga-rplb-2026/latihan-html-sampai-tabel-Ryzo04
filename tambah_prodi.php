<?php
session_start();

header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("location:index.php?p=Anda harus login terlebih dahulu");
    exit();
}

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kd_prodi = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $error = "";

    $cek = mysqli_query($koneksi, "SELECT * FROM prodi WHERE kd_prodi='$kd_prodi'");
    if (mysqli_num_rows($cek) > 0) {
        $error .= "Kode Prodi sudah ada. ";
    } else {
        $simpan = mysqli_query($koneksi, "INSERT INTO prodi VALUES (NULL, '$kd_prodi', '$nama_prodi')");
        if (!$simpan) {
            header("location: prodi.php");
            exit();
        } else {
            $error = "Gagal menyimpan data.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

    <?php include 'navigasi.php'; ?>

    <div id="main">
        <div class="container">
            <h2>Tambah Prodi</h2>
            <hr>

            <?php if (isset($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php } ?>

            <form method="POST">
                <label>Kode Prodi:</label><br>
                <input type="text" name="id_prodi" required><br><br>

                <label">Nama Prodi:</label><br>
                    <input type="text" name="nama" required><br><br>

                    <button type="submit" name="simpan" class="submit">SIMPAN</button>
                    <a href="prodi.php" class="batal">BATAL</a>
            </form>

        </div>
    </div>
</body>

</html>