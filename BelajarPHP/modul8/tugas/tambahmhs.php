<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white text-center">
                <h2 class="h5 mb-0">Tambah Mahasiswa</h2>
            </div>
            <div class="card-body">
                <form action="prosestambah.php" method="post">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM:</label>
                        <input type="text" id="nim" name="nim" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-label">Kelamin:</label>
                        <div>
                            <input type="radio" id="kelamin_l" name="kelamin" value="L" class="form-check-input">
                            <label for="kelamin_l" class="form-check-label">Laki-laki</label>
                        </div>
                        <div>
                            <input type="radio" id="kelamin_p" name="kelamin" value="P" class="form-check-input">
                            <label for="kelamin_p" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan:</label>
                        <div>
                            <input type="radio" id="jurusan_ti" name="jurusan" value="TI" class="form-check-input" required>
                            <label for="jurusan_ti" class="form-check-label">TI</label>
                        </div>
                        <div>
                            <input type="radio" id="jurusan_tk" name="jurusan" value="TK" class="form-check-input">
                            <label for="jurusan_tk" class="form-check-label">TK</label>
                        </div>
                        <div>
                            <input type="radio" id="jurusan_ka" name="jurusan" value="KA" class="form-check-input">
                            <label for="jurusan_ka" class="form-check-label">KA</label>
                        </div>
                        <div>
                            <input type="radio" id="jurusan_mi" name="jurusan" value="MI" class="form-check-input">
                            <label for="jurusan_mi" class="form-check-label">MI</label>
                        </div>
                        <div>
                            <input type="radio" id="jurusan_si" name="jurusan" value="SI" class="form-check-input">
                            <label for="jurusan_si" class="form-check-label">SI</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </form>

</body>
</html>