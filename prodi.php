<?php
session_start();

header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if(!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("location:index.php?p=Anda harus login terlebih dahulu");
    exit();
}

include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM prodi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    
<?php include 'navigasi.php'; ?>

<div id="main">
<div class="container">
    <h2>Data Prodi</h2>
    <hr>

    <a href="tambah_prodi.php">TAMBAH DATA PRODI</a>
    <br><br>

    <table>
        <tr>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>ACTION</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $row['kd_prodi']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td>
                <a href="edit_prodi.php?id_prodi=<?php echo $row['id']; ?>">EDIT</a> |
                <a href="hapus_prodi.php?kode_prodi=<?php echo $row['id']; ?>" onclick="return confirm('yakin ingin menghapus data ini?')">DELETE</a>
            </td>
        </tr>
        <?php }?>
    </table>
</div>
</body>
</html>