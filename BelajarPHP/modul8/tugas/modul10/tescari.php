<?php
require_once __DIR__ . '/../bacamahasiswa.php';

$kondisi = "Jurusan = 'TI'";
$data = cariSemuaMhs($kondisi);
if ($data != null) {
    foreach($data as $mhs) {
        $nim = $mhs['nim'];
        $nama = $mhs['nama'];
        echo "$nim, $nama <br>";
    }
} else {
    echo "Data mahasiswa dengan kondisi '$kondisi' tidak ditemukan.";
}
?>