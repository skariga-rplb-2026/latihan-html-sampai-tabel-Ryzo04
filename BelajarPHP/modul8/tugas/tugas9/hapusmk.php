<?php
require_once __DIR__ . '/crudmk.php';
$data = bacaSemuaMk();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center">
                <h2 class="h4 mb-0">Hapus Mata Kuliah</h2>
            </div>
            <div class="card-body">
                <?php if (empty($data)) : ?>
                    <div class="alert alert-warning text-center">Tidak ada mata kuliah untuk dihapus.</div>
                <?php else : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark text-center small">
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>SKS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <?php foreach ($data as $mk) : ?>
                                    <tr>
                                        <td class="text-center"><?= htmlspecialchars($mk['kode']) ?></td>
                                        <td><?= htmlspecialchars($mk['nama']) ?></td>
                                        <td class="text-center"><?= htmlspecialchars($mk['sks']) ?></td>
                                        <td class="text-center">
                                            <a href="konfirmasiubahmk.php?kode=<?= urlencode($mk['kode']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="konfirmasihapusmk.php?kode=<?= urlencode($mk['kode']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
                <div class="text-center mt-3">
                    <a href="bacamk.php" class="btn btn-primary">Kembali ke Daftar Mata Kuliah</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
