<?php
$kode = $_GET['kode'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-body text-center">
                <?php if ($kode === '') : ?>
                    <div class="alert alert-warning">Kode mata kuliah tidak ditemukan.</div>
                    <a href="hapusmk.php" class="btn btn-primary">Kembali</a>
                <?php else : ?>
                    <h1 class="h4">Apakah anda akan menghapus mata kuliah dengan kode: <?= htmlspecialchars($kode) ?></h1>
                    <form action="proseshapusmk.php" method="post" class="mt-4 d-inline-block">
                        <input type="hidden" name="kode" value="<?= htmlspecialchars($kode) ?>">
                        <button type="submit" name="aksi" value="ok" class="btn btn-danger me-2">OK</button>
                        <button type="submit" name="aksi" value="batal" class="btn btn-secondary">Batal</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
