<?php
require_once __DIR__ . '/bacamahasiswa.php';

$nim = '';
$mahasiswa = null;
$message = '';

if (isset($_POST['cari_nim'])) {
    $nim = trim($_POST['nim'] ?? '');

    if ($nim === '') {
        $message = 'Silakan masukkan NIM.';
    } else {
        $mahasiswa = cariMhsDariNim($nim);
        if ($mahasiswa === null) {
            $message = "NIM $nim tidak ada";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Mahasiswa - Modul 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="h5 mb-0">Cari Mahasiswa berdasarkan NIM</h2>
            </div>
            <div class="card-body">
                <form method="post" class="row g-3">
                    <div class="col-sm-8">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM" value="<?= htmlspecialchars($nim) ?>">
                    </div>
                    <div class="col-sm-4 align-self-end">
                        <button type="submit" name="cari_nim" class="btn btn-success w-100">Cari</button>
                    </div>
                </form>

                <?php if ($message !== '') : ?>
                    <div class="alert alert-warning mt-4" role="alert"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>

                <?php if ($mahasiswa !== null) : ?>
                    <div class="mt-4 p-4 border rounded bg-white">
                        <p class="mb-2"><strong>NIM</strong> <?= htmlspecialchars($mahasiswa['nim']) ?></p>
                        <p class="mb-2"><strong>Nama</strong> <?= htmlspecialchars($mahasiswa['nama']) ?></p>
                        <p class="mb-2"><strong>Kelamin</strong> <?= htmlspecialchars($mahasiswa['kelamin']) ?></p>
                        <p class="mb-0"><strong>Jurusan</strong> <?= htmlspecialchars($mahasiswa['jurusan']) ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
