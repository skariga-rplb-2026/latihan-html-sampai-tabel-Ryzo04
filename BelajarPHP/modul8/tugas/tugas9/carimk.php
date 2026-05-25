<?php
require_once __DIR__ . '/crudmk.php';

$nim = '';
$kode = '';
$mahasiswa = null;
$message = '';

if (isset($_POST['cari_kode'])) {
    $kode = trim($_POST['kode'] ?? '');

    if ($kode === '') {
        $message = 'Silakan masukkan Kode Mata Kuliah.';
    } else {
        $mahasiswa = cariMkDariKode($kode);
        if ($mahasiswa === null) {
            $message = "Kode Mata Kuliah $kode tidak ada";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Mata Kuliah - Modul 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="h5 mb-0">Cari Mata Kuliah berdasarkan Kode</h2>
            </div>
            <div class="card-body">
                <form method="post" class="row g-3">
                    <div class="col-sm-8">
                        <label for="kode" class="form-label">Kode Mata Kuliah</label>
                        <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan Kode Mata Kuliah" value="<?= htmlspecialchars($kode) ?>">
                    </div>
                    <div class="col-sm-4 align-self-end">
                        <button type="submit" name="cari_kode" class="btn btn-success w-100">Cari</button>
                    </div>
                </form>

                <?php if ($message !== '') : ?>
                    <div class="alert alert-warning mt-4" role="alert"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>

                <?php if (is_array($mahasiswa) && isset($mahasiswa['__all__'])) : ?>
                    <?php $semua = bacaSemuaMhs(); ?>
                    <?php if (empty($semua)) : ?>
                        <div class="alert alert-warning mt-4" role="alert">Data mahasiswa tidak ditemukan.</div>
                    <?php else : ?>
                        <div class="mt-4 table-responsive">
                            <table class="table table-bordered table-striped table-hover align-middle">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>SKS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($semua as $mhs) : ?>
                                        <tr>
                                            <td class="text-center"><?= htmlspecialchars($mhs['kode']) ?></td>
                                            <td><?= htmlspecialchars($mhs['nama']) ?></td>
                                            <td class="text-center"><?= htmlspecialchars($mhs['sks']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                <?php elseif ($mahasiswa !== null) : ?>
                    <div class="mt-4 p-4 border rounded bg-white">
                        <p class="mb-2"><strong>Kode</strong> <?= htmlspecialchars($mahasiswa['kode']) ?></p>
                        <p class="mb-2"><strong>Nama</strong> <?= htmlspecialchars($mahasiswa['nama']) ?></p>
                        <p class="mb-2"><strong>SKS</strong> <?= htmlspecialchars($mahasiswa['sks']) ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

