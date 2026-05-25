<?php
require_once __DIR__ . '/../bacamahasiswa.php';

$nim = $_POST['nim'] ?? '';
$nama = $_POST['nama'] ?? '';
$kelamin = $_POST['kelamin'] ?? '';
$jurusan = $_POST['jurusan'] ?? '';

if ($nim !== '' && $nama !== '' && $kelamin !== '' && $jurusan !== '') {
    if (ubahMhs($nim, $nama, $kelamin, $jurusan)) {
        header('Location: ubahmhs.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Mahasiswa Gagal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="alert alert-danger">Gagal mengubah data mahasiswa. Pastikan semua isian benar.</div>
        <a href="ubahmhs.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
