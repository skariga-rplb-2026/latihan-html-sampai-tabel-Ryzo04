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
                    <input type="checkbox" name="kursus[]" value="C#"> C# <br>
                    <input type="checkbox" name="kursus[]" value="JavaScript"> JavaScript <br>
                    <input type="checkbox" name="kursus[]" value="Perl"> Perl <br>
                    <input type="checkbox" name="kursus[]" value="PHP"> PHP <br>
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
    } else {
        echo "<span style='color:red'>Kursus belum dipilih</span><br>";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['kursus']) && !empty($_POST['kursus'])) {

            $kursus = $_POST['kursus'];
            $jumlah = count($kursus);
            $biaya = $jumlah * 1000000;

            echo "<p>Terimakasih Data Anda Sudah Diterima. <br>
        Kursus yang anda pilih sebanyak $jumlah buah yaitu: </p>";

            echo "<ul>";
            foreach ($kursus as $k) {
                echo "<li>" . $k . "</li>";
            }
            echo "</ul>";

            echo "Biaya kursus sebesar Rp. $biaya" . ",-";
        } else {
            echo "<span style='color:red'>Kursus belum dipilih</span>";
        }
    }
    ?>

</body>

</html>