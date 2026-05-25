<?php
function farenheit($celsius)
{
    $fahrenheit = 32 + (1.8 * $celsius);
    return $fahrenheit;
}
  
function kelvin($celsius)
{
    $kelvin = $celsius + 273.15;
    return $kelvin;
}
  
if (isset($_POST["hitung"])) {
    $celsius = $_POST["celsius"];
    $f = farenheit($celsius);
    $k = kelvin($celsius);
    echo "<fieldset style='width: 350px; margin: auto; margin-top: 50px;'>";
    echo "<h2>Hasil Konversi Suhu Celsius ke Kelvin dan Fahrenheit</h2> ";
    echo "<p style=' font-family: times new roman;'>Derajat Celsius       : $celsius </p>";
    echo "<p style=' font-family: times new roman;'>Derajat Kelvin        : $k </p>";
    echo "<p style=' font-family: times new roman;'>Derajat Fahrenheit    : $f </p>";
    echo "</fieldset>";
}

