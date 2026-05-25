<?php
$angkaAcak = rand (1, 9999999) ;
echo "Angka Acak : $angkaAcak <br/>" ;

$pi = pi();
echo "Nilai Pi : $pi <br/>" ;

$luas_lingkaran = pi() * 10;
echo "Luas Lingkaran : $luas_lingkaran <br/>" ;

$menjadipositif = abs (-10);
echo "Menjadi Positif : $menjadipositif <br/>" ;

$pangkat = pow (2, 3);
echo "Pangkat 2^3 : $pangkat <br/>" ;

$decimal = 123.6783;
echo "Nilai Decimal: $decimal <br/>" ;

$akar = sqrt (100);
echo "Akar angka 100 : $akar <br/>" ;

$pembulatan = floor ($decimal) ;
echo "Pembulatan nilai decimal ke bulat : $pembulatan <br/>" ;

$pembulatannaik = ceil ($decimal);
echo "Pembulatan nilai naik : $pembulatannaik <br/>" ;

$pendekatan = round ($decimal, 3) ;
echo "Pendekatan nilai : $pendekatan <br/>" ;

?>