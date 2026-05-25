<?php
include __DIR__ . '/crudmhs.php';
$jurusan = "";
$nama_cari = "";
$data = [];

if (isset($_POST['tampilkan_jurusan'])) {
    $jurusan = $_POST['jurusan'];
    $data = bacaMhsPerJurusan($jurusan);
}

if (isset($_POST['cari_nama'])) {
    $nama_cari = $_POST['nama_input'];
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
                <div class="text-center mt-4">
                    <a href="tabel2.php" class="btn btn-primary px-5">Reset Tampilan</a>
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
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    <?php foreach ($data as $mhs) : ?>
                                        <tr>
                                            <td class="text-center"><?= $mhs['nim'] ?></td>
                                            <td><?= $mhs['nama'] ?></td>
                                            <td class="text-center"><?= $mhs['kelamin'] ?></td>
                                            <td class="text-center"><?= $mhs['jurusan'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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