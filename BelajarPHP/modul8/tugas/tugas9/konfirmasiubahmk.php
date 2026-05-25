<?php
require_once __DIR__ . '/crudmk.php';

$kode = $_GET['kode'] ?? '';
$mk = null;

if ($kode !== '') {
    $mk = cariMkDariKode($kode);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark text-center">
                <h2 class="h5 mb-0">Ubah Mata Kuliah</h2>
            </div>
            <div class="card-body">
                <?php if ($mk === null) : ?>
                    <div class="alert alert-danger">Data mata kuliah dengan Kode <?= htmlspecialchars($kode) ?> tidak ditemukan.</div>
                    <a href="ubahmk.php" class="btn btn-primary">Kembali</a>
                <?php else : ?>
                    <form action="prosesubahmk.php" method="post">
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode:</label>
                            <input type="text" id="kode" name="kode" class="form-control" value="<?= htmlspecialchars($mk['kode']) ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= htmlspecialchars($mk['nama']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SKS:</label>
                            <div>
                                <input type="number" id="sks" name="sks" class="form-control" value="<?= htmlspecialchars($mk['sks']) ?>" required>
                            </div>               
                        </div>
                        <button type="submit" class="btn btn-warning">Ubah</button>
                        <a href="ubahmk.php" class="btn btn-secondary ms-2">Batal</a>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>