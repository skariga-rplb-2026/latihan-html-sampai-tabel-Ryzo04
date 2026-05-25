<?php
require_once __DIR__ . '/bacamahasiswa.php';

$nim = $_POST['nim'] ?? '';
$nama = $_POST['nama'] ?? '';
$kelamin = $_POST['kelamin'] ?? '';
$jurusan = $_POST['jurusan'] ?? '';

$hasil = tambahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil > 0) {
    header("Location: tabel2.php");
} else {
     header("Location: gagaltambah.php");
}

?>