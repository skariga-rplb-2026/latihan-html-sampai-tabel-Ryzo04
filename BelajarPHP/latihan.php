<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php</title>
</head>

<body>

    <?php

    echo "<h1>Selamat Datang..</h1>";
    echo "Program PHPku yang pertama<br>";

    echo "<hr>";

    $a = 20;
    $b = 5;
    $c = $a * $b;
    $d = $c / $b;
    $e = $d - $b;
    echo "$c \t $d \t $e";
    echo "<br />";

    $a = "Malang ";
    $a = $a . "Kotaku";
    echo "$a <br />";

    $b = "SMK PGRI 3 ";
    $b .= "Sekolahku";
    echo "$b";

    echo "<hr>";

    $beli1  =  "5";
    $beli2  =  "7";
    $hasil1 = $beli1 + $beli2;
    $hasil2 = $beli1 . $beli2;
    echo "Hasil1 : $hasil1 <br> Hasil2 : $hasil2 ";

    echo "<hr>";

    $a = "5";
    $b = "2.5";
    $komentar = "Selamat Datang";
    echo ("Nilai variabel a adalah = $a <br>");
    //variabel bertipe integer  
    echo ("Nilai variabel b adalah = $b <br>");
    //variabel bertipe real  
    echo ("Nilai variabel komentar adalah = $komentar<br>");
    //variabel bertipe string  
    $hasil = $a + $b;
    echo ("Hasil jumlah a dan b adalah = $hasil <br>");

    echo "<hr>";

    //variabel bertipe double  
    $nama = "SMKS PGRI 3";
    $garis = "=====================================";
    echo "<p>";
    echo $garis . "<br>";
    echo $komentar . " Di Lab " . $nama . "<br>Belajar dengan giat 
    ya.... <br>";
    echo $garis . "<br>";

    echo "<hr>";

    $ia = 4; // decimal  
    $ib = -20; // decimal negatif  
    $ic = 0232; // octal  
    $id = 0x5DF; // hexadecimal  
    $jumlah = $ia + 3;
    // Single quoted = tidak bisa membaca var dlm String
    echo 'single quoted <br />';
    echo 'Budi berkata, "I\'ll do the PHP code" <br />';
    echo 'PHP ini terletak di C:\\php\ <br />';
    echo 'Variabel seperti $jumlah tidak akan ditulis valuenya 
    <br />';
    echo '=====================================<br/>';
    // Double quoted = bisa membaca variabel dalam String
    echo "double quoted <br />";
    echo "Budi berkata, 'I\"ll do the PHP code' <br />";
    echo "PHP ini terletak di C:\php\<br />";
    echo "Variabel \$jumlah mempunyai value $jumlah </br>";

    ?>


</body>

</html>