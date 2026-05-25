<?php
require_once __DIR__ . '/bacamahasiswa.php';

$nim = $_GET['nim'];

$hasil = hapusmhs($nim);
if($hasil > 0) {
    header("Location: tabel2.php");
} else {
    echo "Gagal menghapus data mahasiswa.";
}
?>