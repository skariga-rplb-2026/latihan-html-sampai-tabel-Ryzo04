<?php
require_once __DIR__ . '/crudmk.php';

$kode = $_POST['kode'] ?? '';
$nama = $_POST['nama'] ?? '';
$sks = $_POST['sks'] ?? '';

if ($kode !== '' && $nama !== '' && $sks !== '') {
    if (tambahMk($kode, $nama, (int) $sks)) {
        header('Location: bacamk.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah Gagal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="alert alert-danger">Gagal menambah mata kuliah. Pastikan semua isian benar.</div>
        <a href="tambahmk.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
