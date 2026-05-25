<?php
require_once __DIR__ . '/bacamahasiswa.php';

$jurusan = '';
$data = [];

if (isset($_POST['tampilkan_jurusan'])) {
    $jurusan = $_POST['jurusan'] ?? '';
    
    // Jika memilih "Semua", ambil data dari semua jurusan
    if ($jurusan === 'SEMUA') {
        $semua_jurusan = ['TI', 'SI', 'MI', 'TK', 'KA'];
        $data = [];
       foreach ($semua_jurusan as $jrs) {
            $data_jurusan = bacaMhsPerJurusan($jrs);
            if (is_array($data_jurusan)) {
                $data = array_merge($data, $data_jurusan);
            }
        }
    } else {
        $data = bacaMhsPerJurusan($jurusan);
    }
} elseif (isset($_POST['cari_nama'])) {
    $nama_cari = $_POST['nama_input'] ?? '';
    $data = cariMhsDariNama($nama_cari);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - Modul 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center">
                <h2 class="h4 mb-0">Manajemen Data Mahasiswa</h2>
            </div>
            <div class="card-body">

                <div class="row g-4">
                    <div class="col-md-6 border-end">
                        <form method="post" class="row g-2">
                            <div class="col-12">
                                <label class="form-label fw-bold">Jurusan:</label>
                                <select name="jurusan" class="form-select">
                                    <option value="SEMUA" <?= $jurusan == 'SEMUA' ? 'selected' : '' ?>>-- Semua Jurusan --</option>
                                    <option value="TI" <?= $jurusan == 'TI' ? 'selected' : '' ?>>TI</option>
                                    <option value="SI" <?= $jurusan == 'SI' ? 'selected' : '' ?>>SI</option>
                                    <option value="MI" <?= $jurusan == 'MI' ? 'selected' : '' ?>>MI</option>
                                    <option value="TK" <?= $jurusan == 'TK' ? 'selected' : '' ?>>TK</option>
                                    <option value="KA" <?= $jurusan == 'KA' ? 'selected' : '' ?>>KA</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="tampilkan_jurusan" class="btn btn-primary w-30">Tampilkan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="hapusmhs.php" class="btn btn-primary px-5">Reset Tampilan</a>
                </div>

                <hr class="my-4">

                <?php
                if (isset($_POST['tampilkan_jurusan']) || isset($_POST['cari_nama'])) {
                    if (empty($data)) {
                        echo "<div class='alert alert-warning text-center small'>Data tidak ditemukan.</div>";
                    } else {
                ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover mt-2">
                                <thead class="table-dark text-center small">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Kelamin</th>
                                        <th>Jurusan</th>
                                        <th>Proses</th>
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    <?php foreach ($data as $mhs) : ?>
                                        <tr>
                                            <td class="text-center"><?= $mhs['nim'] ?></td>
                                            <td><?= $mhs['nama'] ?></td>
                                            <td class="text-center"><?= $mhs['kelamin'] ?></td>
                                            <td class="text-center"><?= $mhs['jurusan'] ?></td>
                                            <td class="text-center">
                                                <a id="konfirm" href="konfirmasihapus.php?nim=<?= $mhs['nim'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="mt-2 text-secondary small">
                                <strong>Total data:</strong> <?= count($data) ?> mahasiswa
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>