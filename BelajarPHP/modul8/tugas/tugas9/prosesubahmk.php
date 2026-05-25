<?php
require_once __DIR__ . '/crudmk.php';

$kode = $_POST['kode'] ?? '';
$nama = $_POST['nama'] ?? '';
$sks = $_POST['sks'] ?? '';
$error = '';

if ($kode !== '' && $nama !== '' && $sks !== '') {
    $hasil = ubahMk($kode, $nama, $sks);
    if ($hasil === true) {
        header('Location: ubahmk.php');
        exit;
    } else {
        $error = $hasil; // Ambil pesan error dari fungsi
    }
} else {
    $error = 'Silakan isi semua data dengan benar';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Mata Kuliah Gagal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <a href="ubahmk.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
