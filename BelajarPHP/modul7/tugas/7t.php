<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Peserta</title>
</head>

<body>
    <h2>Registrasi Peserta Kursus</h2>

    <form method="post" action="">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" size="30"></td>
            </tr>

            <tr>
                <td>Kursus yang diambil:</td>
                <td>
                    <input type="checkbox" name="kursus[]" value="C#-1000000"> C# (biaya Rp.1.000.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="JavaScript-500000"> JavaScript (biaya Rp.500.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="Perl-800000"> Perl (biaya Rp.800.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="PHP-1100000"> PHP (biaya Rp.1.100.000,-)<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (array_key_exists('nama', $_POST)) {
        $nama = trim($_POST['nama']);
        if (empty($nama))
            echo "<span style='color:red'>Nama belum diisi</span><br>";
    }
    if (array_key_exists('email', $_POST)) {
        $email = trim($_POST['email']);
        if (empty($email))
            echo "<span style='color:red'>email belum diisi</span><br>";
    }
    if (array_key_exists('kursus', $_POST)) {
        $kursus = $_POST['kursus'];
        if (empty($kursus))
            echo "<span style='color:red'>Kursus belum diisi</span><br>";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['kursus']) && !empty($_POST['kursus'])) {

            $kursus = $_POST['kursus'];
            $jumlah = count($kursus);

            echo "<p>Terimakasih Data Anda Sudah Diterima. <br>
        Kursus yang anda pilih sebanyak $jumlah buah yaitu: </p>";

            $total = 0;

            echo "<ul>";
            foreach ($kursus as $k) {
                $harga = explode("-", $k);
                echo "<li>" . $harga[0] . "</li>";
                $total += $harga[1];
            }
            echo "</ul>";

            echo "Biaya kursus sebesar Rp. $total" . ",-";
        } else {
            echo "<span style='color:red'>Kursus belum dipilih</span>";
        }
    }
    ?>

</body>

</html>