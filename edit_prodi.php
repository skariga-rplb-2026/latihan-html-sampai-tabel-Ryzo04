<?php
session_start();

header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("location:index.php?p=Anda harus login terlebih dahulu");
    exit();
}

include 'koneksi.php';

if (!isset($_GET['id_prodi'])) {
    header("location:prodi.php");
    exit();
}

$id_prodi = $_GET['id_prodi'];

$query = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id_prodi='$id_prodi'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("location:prodi.php");
    exit();
}

$error = "";

if (isset($_POST['update'])) {
    $kd_prodi = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];

    if (empty($kd_prodi) || empty($nama_prodi)) {
        $error = "Semua field harus diisi.";
    } else {
        $update = mysqli_query($koneksi, "UPDATE prodi SET kd_prodi='$kd_prodi', nama='$nama_prodi' WHERE id_prodi='$id_prodi'");
        if ($update) {
            header("location:prodi.php");
            exit();
        } else {
            $error = "Gagal memperbarui data.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

    <?php include 'navigasi.php'; ?>

    <div id="main">
        <div class="container">
            <h2>Edit Data Prodi</h2>
            <hr>

            <?php if (!empty($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php } ?>

            <form method="POST">
                <label>Kode Prodi:</label>
                <input type="text" name="kd_prodi" value="<?php echo $data['kd_prodi']; ?>" required><br><br>

                <label>Nama Prodi:</label>
                <input type="text" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>" required><br><br>

                <button type="submit" name="update" class="submit">UPDATE</button>
                <a href="prodi.php" class="batal">BATAL</a>
            </form>
        </div>
    </div>
</body>

</html>