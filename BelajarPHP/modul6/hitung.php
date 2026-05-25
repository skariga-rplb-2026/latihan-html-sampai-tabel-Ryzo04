<?php
function jumlah($bil1, $bil2)
{
    $jumlah = $bil1 + $bil2;
    return $jumlah;
}

function kurang($bil1, $bil2)
{
    $kurang = $bil1 - $bil2;
    return $kurang;
}



if ($_POST["hitung"] == "JUMLAH") {
    $hasil = jumlah($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Penjumlahan : $hasil <br/>";
}

if ($_POST["hitung"] == "KURANG") {
    $hasil = kurang($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Pengurangan : $hasil <br/>";
}
