<?php
require_once __DIR__ . '/bacamahasiswa.php';

$data = bacaSemuaMhs();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa Setelah Hapus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center">
                <h2 class="h4 mb-0">Data Mahasiswa Setelah Hapus</h2>
            </div>
            <div class="card-body">
                <?php if (empty($data)) : ?>
                    <div class="alert alert-warning text-center">Tidak ada data mahasiswa.</div>
                <?php else : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark text-center small">
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Kelamin</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <?php foreach ($data as $mhs) : ?>
                                    <tr>
                                        <td class="text-center"><?= htmlspecialchars($mhs['nim']) ?></td>
                                        <td><?= htmlspecialchars($mhs['nama']) ?></td>
                                        <td class="text-center"><?= htmlspecialchars($mhs['kelamin']) ?></td>
                                        <td class="text-center"><?= htmlspecialchars($mhs['jurusan']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
                <div class="text-center mt-3">
                    <a href="hapusmhs.php" class="btn btn-primary">Kembali ke Hapus Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
