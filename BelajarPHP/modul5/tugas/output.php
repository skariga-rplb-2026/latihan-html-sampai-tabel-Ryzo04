<!DOCTYPE html>
<html>

<head>
    <title>Output Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            font-size: 14px;
        }

        .box {
            border: 1px solid #000;
            padding: 18px;
            max-width: 640px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .line {
            white-space: pre;
            font-family: monospace;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <div class="box">
        <div class="title">Data Barang</div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = trim($_POST['nama'] ?? '-');
            $jenis = trim($_POST['jenis'] ?? '-');
            $seri = trim($_POST['seri'] ?? '-');
            $merk = trim($_POST['merk'] ?? '-');
            $negara = trim($_POST['negara'] ?? '-');
            $hari = trim($_POST['angka_hari'] ?? '-');
            $bulan = trim($_POST['bulan'] ?? '-');
            $tahun = trim($_POST['tahun'] ?? '-');
            $harga = trim($_POST['harga'] ?? '0');
            $stok = trim($_POST['stok'] ?? '0');


            $jenis_nama = $jenis_map[$jenis] ?? $jenis;
            $angka_hari = $_POST["angka_hari"];
            $bulan = $_POST["bulan"];
            $tahun = $_POST["tahun"];
            $angka_tanggal = mktime(0, 0, 0, $bulan, $angka_hari, $tahun);
            $tanggal = date("l, j F Y", $angka_tanggal);

            $kode = [];
            $kode[] = strtoupper(substr(preg_replace('/\s+/', '', $nama), 0, 3));
            $kode[] = str_pad($seri, 6, '0', STR_PAD_LEFT);
            $kode[] = strtoupper(substr(preg_replace('/\s+/', '', $merk), 0, 3));
            $kode[] = strtoupper(substr(preg_replace('/\s+/', '', $negara), 0, 3));
            $set_kode = implode('-', $kode);

            $harga_ang = floatval(str_replace(['Rp', '.', ','], ['', '', ''], $harga));
            $total = $harga_ang * intval($stok);
            $harga_text = 'Rp. ' . number_format($harga_ang, 2, ',', '.');
            $total_text = 'Rp. ' . number_format($total, 2, ',', '.');

            echo "<div class='line'>";
            echo "Kode               : " . htmlspecialchars($set_kode) . "<br>";
            echo "Nama Barang        : " . htmlspecialchars($nama) . "<br>";
            echo "Nomor Seri         : " . htmlspecialchars($seri) . "<br>";
            echo "Merk               : " . htmlspecialchars($merk) . "<br>";
            echo "Buatan Dari        : " . htmlspecialchars($negara) . "<br>";
            echo "Tanggal Buat       : " . htmlspecialchars($tanggal) . "<br>";
            echo "Harga              : " . $harga_text . "<br>";
            echo "Jumlah Stok        : " . htmlspecialchars($stok) . "<br>";
            echo "Total Harga        : " . $total_text . "<br>";
            echo "</div>";
        } else {
            echo "<p>Tidak ada data yang dikirim. Silahkan isi form terlebih dahulu.</p>";
        }
        ?>

    </div>

</body>

</html>