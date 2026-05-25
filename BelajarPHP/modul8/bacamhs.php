<?php
require_once __DIR__ . '/bacamahasiswa.php';

if (!isset($koneksi)) {
    die("koneksi kosong yaa~");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>kelamin</th>
            <th>Jurusan</th>
        </tr>

        <?php foreach (bacaSemua($koneksi) as $data) { ?>

            <tr>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kelamin']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

