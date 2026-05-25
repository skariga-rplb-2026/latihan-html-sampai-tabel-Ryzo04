<?php
$awal = $_POST["awal"];
$akhir = $_POST["akhir"];
$lanjutkan = $_POST["lanjut"];
for ($i=$awal; $i<=$akhir; $i++){
    if ($i == $lanjutkan){
        continue;
    }
    echo "<br /> for ke $i.";
}   

?>