<?php
session_start();

header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if(!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("location:index.php?p=Anda harus login terlebih dahulu");
    exit();
}

include 'koneksi.php';

if(!isset($_GET['id_prodi'])) {
    header("location:prodi.php");
    exit();
}

$id_prodi = $_GET['id_prodi'];

$q = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id='$id_prodi'");
$data = mysqli_fetch_assoc($q);

if(!$data) {
    header("location:prodi.php");
    exit();
}

$kd_prodi = $data['kd_prodi'];

$cek = mysqli_query($koneksi, "SELECT * FROM prodi WHERE kd_prodi='$kd_prodi'");

if(mysqli_num_rows($cek) > 0) {
        header("location:prodi.php?p=Data tidak dapat dihapus karena masih digunakan");
        exit();
    } else {
        $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_prodi='$id_prodi'");
        if (!$hapus) {
            header("location:prodi.php");
            exit();
        } else {
                header("location:prodi.php?p=Gagal menghapus data");
                exit();
            }
        }
?>
