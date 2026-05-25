<?php
require_once __DIR__ . '/koneksidb.php';

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
