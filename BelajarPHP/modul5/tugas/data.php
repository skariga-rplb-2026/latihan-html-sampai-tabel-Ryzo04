<!DOCTYPE html>
<html>

<head>
    <title>Tugas Modul 5</title>
</head>

<body>

    <fieldset style="width: 510px; margin: 40px;">
        <h1>Data Barang</h1>

        <hr style="height: 2px; margin-left: 0; border-radius:none ; background-color:black; width:70%;"> <br>

        <form action="http://localhost:8080/BelajarPHP/modul5/tugas/output.php" method="post">
            Nama Barang <br>
            <input type="text" name="nama"> <br>
            Jenis <br>
            <select name="jenis">
                <option value="">- Pilih -</option>
                <option value="PC">PC Komputer</option>
                <option value="LP">Laptop</option>
                <option value="PR">Peripheral</option>
                <option value="SP">Smart Phone</option>
                <option value="IP">Advan X-tab</option>
            </select> <br>
            Nomor Seri <br>
            <input type="text" name="seri"><br>
            Merk <br>
            <input type="text" name="merk"><br>
            Negara Pembuat <br>
            <input type="text" name="negara"><br>
            <fieldset style="width: 300px; margin-top: 10px;">
                <legend>Tanggal Pembuatan</legend>
                Tgl
                <select name="angka_hari">
                    <?php
                    for ($hari = 1; $hari <= 31; $hari++) {
                        $htgl = str_pad($hari, 2, "0", STR_PAD_LEFT);
                        echo "<option value='$htgl'>$htgl</option>";
                    }
                    ?>
                </select>
                Bulan
                <select name="bulan">
                    <?php
                    for ($bulan = 1; $bulan <= 12; $bulan++) {
                        $bln = str_pad($bulan, 2, "0", STR_PAD_LEFT);
                        echo "<option value='$bln'>$bln</option>";
                    }
                    ?>
                </select>
                Tahun
                <select name="tahun">
                    <?php
                    $tahun_sekarang = date("Y");
                    $tahun_awal = $tahun_sekarang - 10;
                    $tahun_akhir = $tahun_sekarang + 10;
                    for ($tahun = $tahun_akhir; $tahun >= $tahun_awal; $tahun--) {
                        echo "<option value='$tahun'>$tahun</option>";
                    }
                    ?>
                </select>
            </fieldset>
            Harga Barang <br>
            Rp. <input type="text" name="harga"><br>
            Jumlah Stok <br>
            <input type="text" name="stok"><br>
            <hr style="height: 2px; margin-left: 0; border-radius:none ; background-color:black; width:70%;">
            <input type="submit" value="SUBMIT">
            <input type="reset" value="RESET">
        </form>

    </fieldset>
</body>

</html>