<?php
include_once __DIR__ . '/bacamahasiswa.php';

$nim = '1234567890';
$nama = 'John Doe';
$kelamin = 'L';
$jurusan = 'TI';

$hasil = tambahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil > 0) {
    header("Location: tabel2.php");
} else {
    echo "Gagal menambahkan data mahasiswa.";
}
?>