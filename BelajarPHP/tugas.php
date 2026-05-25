<?php
$data = [
    ["nama" => "Andi", "Mapel" => "Bahasa Inggris", "Nilai" => 80],
    ["nama" => "Budi", "Mapel" => "Matematika", "Nilai" => 98],
    ["nama" => "Cici", "Mapel" => "Informatika", "Nilai" => 85],
    ["nama" => "Dedi", "Mapel" => "Informatika", "Nilai" => 95],
    ["nama" => "Eka", "Mapel" => "Matematika", "Nilai" => 75],
    ["nama" => "Eki", "Mapel" => "Bahasa Inggris", "Nilai" => 60],
    ["nama" => "Eko", "Mapel" => "Informatika", "Nilai" => 87],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Filter Mata Pelajaran</h1>
    <form method="GET" action="">
        <?php
        if (isset($_GET['mapel'])) {
            $filter = $_GET['mapel'];
        } else {
            $filter = "semua";
        }

        ?>

        <select name="mapel" id="" onchange="this.form.submit()">
            <option value="semua" <?php echo ($filter == "semua") ? "selected" : ""; ?>>Semua</option>
            <option value="Matematika" <?php echo ($filter == "Matematika") ? "selected" : ""; ?>>Matematika</option>
            <option value="Bahasa Inggris" <?php echo ($filter == "Bahasa Inggris") ? "selected" : ""; ?>>Bahasa Inggris</option>
            <option value="Informatika" <?php echo ($filter == "Informatika") ? "selected" : ""; ?>>Informatika</option>
        </select>
    </form>
    <br />
    <?php
    function getGrade($nilai)
    {
        if ($nilai >= 90) {
            return "A";
        } elseif ($nilai >= 80) {
            return "B";
        } elseif ($nilai >= 70) {
            return "C";
        } else {
            return "D";
        }
    }

    $dataTampil = [];
    if ($filter == "semua") {
        $dataTampil = $data;
    } else {
        foreach ($data as $d) {
            if ($d['Mapel'] == $filter) {
                $dataTampil[] = $d;
            }
        }
    }

    $total = 0;
    $jumlah = count($dataTampil);
    ?>

    <table width="800" border="1">
        <tr>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>

        <?php
        foreach ($dataTampil as $d) {
            $grade = getGrade($d['Nilai']);
            $total += $d['Nilai'];
            echo "<tr class='grade-" . $grade . "'>";
            echo "<td>" . $d['nama'] . "</td>";
            echo "<td>" . $d['Mapel'] . "</td>";
            echo "<td>" . $d['Nilai'] . "</td>";
            echo "<td>" . $grade . "</td>";
            echo "</tr>";
        }

        $rata = $jumlah > 0 ? round($total / $jumlah, 2) : 0;
        ?>
        <tr>
            <th colspan="4"> Rata-Rata : <?php echo $rata; ?> </th>
        </tr>

    </table>
</body>

</html>