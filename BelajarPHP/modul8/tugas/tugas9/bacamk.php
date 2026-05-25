<?php
require_once __DIR__ . '/crudmk.php';
$data = bacaSemuaMk();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah - Modul 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center">
                <h2 class="h4 mb-0">Manajemen Mata Kuliah</h2>
            </div>
            <div class="card-body">
                <hr class="my-4">

                <?php
                if (empty($data)) {
                    echo "<div class='alert alert-warning text-center small'>Data tidak ditemukan.</div>";
                } else {
                ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover mt-2">
                                <thead class="table-dark text-center small">
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>SKS</th>
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    <?php foreach ($data as $mk) : ?>
                                        <tr>
                                            <td class="text-center"><?= htmlspecialchars($mk['kode']) ?></td>
                                            <td><?= htmlspecialchars($mk['nama']) ?></td>
                                            <td class="text-center"><?= htmlspecialchars($mk['sks']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="mt-2 text-secondary small">
                                <strong>Total data:</strong> <?= count($data) ?> mata kuliah
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <div>
        <div class="container mt-4 text-center">
            <a href="tambahmk.php" class="btn btn-success px-5">Tambah Mata Kuliah</a>
            <a href="hapusmk.php" class="btn btn-danger px-5 ms-2">Hapus / Edit Mata Kuliah</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>