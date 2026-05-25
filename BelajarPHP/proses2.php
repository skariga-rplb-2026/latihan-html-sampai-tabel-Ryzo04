<!DOCTYPE html>
<html>
<head>
    <title>Proses Data</title>
</head>
<body>

<h2>Hasil Perhitungan</h2>
<br/>                              
<?php
if(isset($_POST['harga']) && isset($_POST['jumlah'])) {

    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $total = $harga * $jumlah;
    $diskon = 0.10 * $total; // 10%
    $total_setelah_diskon = $total - $diskon;

    echo "Harga = Rp " . $harga . "<br>";
    echo "Jumlah = " . $jumlah . "<br>";
    echo "Total = Rp " . $total . "<br>";
    echo "Diskon 10% = Rp " . $diskon . "<br>";
    echo "Total Setelah Diskon = Rp " . $total_setelah_diskon . "<br>";
}
?>

</body>
</html>