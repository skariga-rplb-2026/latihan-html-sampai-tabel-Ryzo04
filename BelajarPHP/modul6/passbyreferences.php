<?php
function nilai_pertama($x) {
    $x += 200;
}
function nilai_kedua(& $x) {
    $x += 200;
}
$nilai_awal = 100;
nilai_pertama($nilai_awal);
echo "Nilai Akhir Function pertama : $nilai_awal <br/>";
nilai_kedua($nilai_awal);
echo "Nilai Akhir Function kedua : $nilai_awal <br/>";
?>