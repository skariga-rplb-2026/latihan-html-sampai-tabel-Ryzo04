<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kode</title>
</head>
<body>
    <form action="" method="post">
        Kode Depan (Jenis) <br/>
        <select name="jenis">
            <option value="">- Pilih -</option>
            <option value="C" <?php echo (isset($_POST['jenis']) && $_POST['jenis'] == 'C') ? 'selected' : ''; ?>>Celana</option>
            <option value="K" <?php echo (isset($_POST['jenis']) && $_POST['jenis'] == 'K') ? 'selected' : ''; ?>>Kaos</option>
            <option value="H" <?php echo (isset($_POST['jenis']) && $_POST['jenis'] == 'H') ? 'selected' : ''; ?>>Hem</option>
        </select>
        <br/>
        Kode Tengah (Nomor Seri) <br/>
        <input type="text" name="nomor_seri" maxlength="6" value="<?php echo isset($_POST['nomor_seri']) ? htmlspecialchars($_POST['nomor_seri']) : ''; ?>" /> <br/>
        Kode Belakang (Merk) <br/>
        <input type="text" name="merk" value="<?php echo isset($_POST['merk']) ? htmlspecialchars($_POST['merk']) : ''; ?>" />
        <br/><br/>
        <input type="submit" value="BUAT KODE" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jenis = isset($_POST['jenis']) ? trim($_POST['jenis']) : '';
        $nomor_seri = isset($_POST['nomor_seri']) ? trim($_POST['nomor_seri']) : '';
        $merk = isset($_POST['merk']) ? trim($_POST['merk']) : '';
        $errors = [];

        if ($jenis === '') {
            $errors[] = 'Pilih jenis kode.';
        }
        if ($nomor_seri === '') {
            $errors[] = 'Masukkan nomor seri.';
        } elseif (!ctype_digit($nomor_seri)) {
            $errors[] = 'Nomor seri harus berupa angka.';
        }
        if ($merk === '') {
            $errors[] = 'Masukkan merk.';
        }

        if (empty($errors)) {
            $kode = [];
            $kode[] = $jenis;
            $kode[] = str_pad($nomor_seri, 6, '0', STR_PAD_LEFT);
            $kode[] = strtoupper($merk);
            $set_kode = implode('-', $kode);
            echo '<p><strong>Kode Barang: ' . htmlspecialchars($set_kode) . '</strong></p>';
        } else {
            echo '<ul style="color:red;">';
            foreach ($errors as $error) {
                echo '<li>' . htmlspecialchars($error) . '</li>';
            }
            echo '</ul>';
        }
    }
    ?>
</body>
</html>
