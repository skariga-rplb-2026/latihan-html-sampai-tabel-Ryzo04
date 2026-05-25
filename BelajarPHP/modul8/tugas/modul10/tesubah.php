<?php
require_once __DIR__ . '/../bacamahasiswa.php';

$nim = "25887";
$nama = "Hilman";
$kelamin = "L";
$jurusan = "MI";
$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil === true) {
    echo "Data mahasiswa berhasil diubah.";
} else {
    echo "Gagal mengubah data mahasiswa.";
}
?>