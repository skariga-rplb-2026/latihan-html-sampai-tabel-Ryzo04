<?php
require_once __DIR__ . '/../../koneksidb.php';

function bacaMk($sql)
{
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil || mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }

    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['kode']     = $baris['kode'];
        $data[$i]['nama']    = $baris['nama'];
        $data[$i]['sks'] = $baris['sks'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

function bacaSemuaMk()
{
    $sql = "SELECT * FROM matkul";
    return bacaMk($sql);
}

function bacaSemua($koneksi = null)
{
    return bacaSemuaMk();
}

function tambahMk($kode, $nama, $sks) {
    $koneksi = koneksiAkademik();
    $sql = "INSERT INTO matkul (kode, nama, sks) VALUES ('$kode', '$nama', $sks)";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = 1;
    }
    mysqli_close($koneksi);
    return $hasil;
}

function hapusMk($kode) {
    $koneksi = koneksiAkademik();
    $sql = "DELETE FROM matkul WHERE kode = '$kode'";
    mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
}

function cariMkDariKode($kode)
{
  $koneksi = koneksiAkademik();
    $sql = "SELECT * FROM matkul WHERE kode='$kode'";
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil)>0) {
        $baris = mysqli_fetch_assoc($hasil);
        $data['kode'] = $baris['kode'];
        $data['nama'] = $baris['nama'];
        $data['sks'] = $baris['sks'];
        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

function ubahMk($kode, $nama, $sks) {
    $koneksi = koneksiAkademik();
    $sql = "UPDATE matkul SET nama='$nama', sks=$sks WHERE kode='$kode'";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    } else {
        $hasil = "error: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
}
?>