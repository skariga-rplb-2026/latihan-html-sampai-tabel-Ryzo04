<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
$nim = $_GET['nim'] ?? '';
?>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-body text-center">
                <?php if ($nim === '') : ?>
                    <div class="alert alert-warning">NIM tidak ditemukan. Kembali ke halaman pemilihan.</div>
                    <a href="hapusmhs.php" class="btn btn-primary">Kembali</a>
                <?php else : ?>
                    <h1 class="h4">Apakah anda akan menghapus mahasiswa dengan nim: <?= htmlspecialchars($nim) ?></h1>
                    <form action="proseshapus.php" method="post" class="mt-4 d-inline-block">
                        <input type="hidden" name="nim" value="<?= htmlspecialchars($nim) ?>">
                        <button type="submit" name="aksi" value="ok" class="btn btn-danger me-2">OK</button>
                        <button type="submit" name="aksi" value="batal" class="btn btn-secondary">Batal</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>