<?php
// koneksi ada di modul8/koneksidb.php (bukan di folder tugas)
require_once __DIR__ . '/../koneksidb.php';

function bacaMhs($sql)
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
        $data[$i]['nim']     = $baris['nim'];
        $data[$i]['nama']    = $baris['nama'];
        $data[$i]['kelamin'] = $baris['kelamin'];
        $data[$i]['jurusan'] = $baris['jurusan'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

function bacaSemuaMhs()
{
    $sql = "SELECT * FROM mahasiswa";
    return bacaMhs($sql);
}

function bacaSemua($koneksi = null)
{
    return bacaSemuaMhs();
}

function bacaMhsPerJurusan($jurusan)
{
    $sql = "SELECT * FROM mahasiswa WHERE jurusan = '$jurusan'";
    return bacaMhs($sql);
}

function cariMhsDariNim($nim)
{
    $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $data = bacaMhs($sql);

    if ($data == null) {
        return null;
    }
    return $data[0];
}

function cariMhsDariNama($nama)
{
    $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%'";
    return bacaMhs($sql);
}

function tambahMhs($nim, $nama, $kelamin, $jurusan) {
    $koneksi = koneksiAkademik();
    $sql = "INSERT INTO mahasiswa (nim, nama, kelamin, jurusan) VALUES ('$nim', '$nama', '$kelamin', '$jurusan')";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = 1;
    }
    mysqli_close($koneksi);
    return $hasil;
}

function hapusmhs($nim) {
    $koneksi = koneksiAkademik();
    $sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = 1;
    }
    mysqli_close($koneksi);
    return $hasil;
}

function cariMhs($nim) {
    $koneksi = koneksiAkademik();
    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil)>0) {
        $baris = mysqli_fetch_assoc($hasil);
        $data['nim'] = $baris['nim'];
        $data['nama'] = $baris['nama'];
        $data['kelamin'] = $baris['kelamin'];
        $data['jurusan'] = $baris['jurusan'];
        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

function cariSemuaMhs($kondisi) {
    $sql = "SELECT * FROM mahasiswa WHERE $kondisi";
    return bacaMhs($sql);
}

function ubahMhs($nim, $nama, $kelamin, $jurusan) {
    $koneksi = koneksiAkademik();
    $sql = "UPDATE mahasiswa SET nama='$nama', kelamin='$kelamin', jurusan='$jurusan' WHERE nim='$nim'";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    } else {
        $hasil = "error: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
}