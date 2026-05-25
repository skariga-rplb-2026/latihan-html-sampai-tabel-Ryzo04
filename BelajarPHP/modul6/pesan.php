<?php
function judul ()
{
    echo "<h2>Praktikum Pemrograman Web!</h2>";
}
function garis()
{
    echo "====================================<br/>";
}

function mhs ($nis, $nama, $kelas) {
    echo "NIS : $nis <br/>";
    echo "Nama : $nama <br/>";
    echo "Kelas : $kelas <br/>";
}

judul () ;
garis () ;

mhs ("09872222","Umar Bakri",1) ;
garis () 
?>