<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center">
                <h2 class="h4 mb-0">Tambah Mata Kuliah</h2>
            </div>
            <div class="card-body">
                <form action="prosestambahmk.php" method="post">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Matakuliah</label>
                        <input type="text" class="form-control" id="kode" name="kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Matakuliah</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="sks" class="form-label">SKS</label>
                        <input type="number" class="form-control" id="sks" name="sks" min="1" max="6" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="bacamk.php" class="btn btn-secondary ms-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
