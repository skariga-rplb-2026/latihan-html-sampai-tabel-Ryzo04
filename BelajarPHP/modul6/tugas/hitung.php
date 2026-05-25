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

function bagi($bil1, $bil2)
{
    $bagi = $bil1 / $bil2;
    return $bagi;
}

function kali($bil1, $bil2)
{
    $kali = $bil1 * $bil2;
    return $kali;
}

function modulus($bil1, $bil2)
{
    $modulus = $bil1 % $bil2;
    return $modulus;
}

if ($_POST["hitung"] == "JUMLAH") {
    $hasil = jumlah($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Penjumlahan : $hasil <br/>";
}

if ($_POST["hitung"] == "KURANG") {
    $hasil = kurang($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Pengurangan : $hasil <br/>";
}

if ($_POST["hitung"] == "BAGI") {
    $hasil = bagi($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Pembagian : $hasil <br/>";
}

if ($_POST["hitung"] == "KALI") {
    $hasil = kali($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Perkalian : $hasil <br/>";
}

if ($_POST["hitung"] == "MODULUS") {
    $hasil = modulus($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Modulus : $hasil <br/>";
}
