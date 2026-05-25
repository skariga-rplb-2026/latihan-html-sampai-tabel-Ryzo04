<?php
$data = [
    ["nama" => "Andi", "kursus" => "PHP", "bayar" => 800000],
    ["nama" => "Budi", "kursus" => "JavaScript", "bayar" => 900000],
    ["nama" => "Cici", "kursus" => "HTML", "bayar" => 850000],
    ["nama" => "Dedi", "kursus" => "PHP", "bayar" => 950000],
    ["nama" => "Eka", "kursus" => "HTML", "bayar" => 750000]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
</head>

<body>
    pilih kursus :
    <form method="GET" action="">
        <?php
        if (isset($_GET['kursus'])) {
            $filter = $_GET['kursus'];
        } else {
            $filter = "semua";
        }
        ?>

        <select name="kursus" id="" onchange="this.form.submit()">
            <option value="semua" <?php echo ($filter == "semua") ? "selected" : ""; ?>>Semua</option>
            <option value="PHP" <?php echo ($filter == "PHP") ? "selected" : ""; ?>>PHP</option>
            <option value="JavaScript" <?php echo ($filter == "JavaScript") ? "selected" : ""; ?>>JavaScript</option>
            <option value="HTML" <?php echo ($filter == "HTML") ? "selected" : ""; ?>>HTML</option>
        </select>
    </form>
    <br/>

    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>

        <?php

        $dataTampil = [];
        if ($filter == "semua") {
            $dataTampil = $data;
        } else {
            foreach ($data as $d) {
                if ($d['kursus'] == $filter) {
                    $dataTampil[] = $d;
                }
            }
        }

        foreach ($dataTampil as $d) {
            echo "<tr>";
            echo "<td>" . $d['nama'] . "</td>";
            echo "<td>" . $d['kursus'] . "</td>";
            echo "<td>" . $d['bayar'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>