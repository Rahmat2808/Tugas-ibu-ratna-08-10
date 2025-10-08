<html>
    <head>
        <title>Sistem Penyewaan mobil</title>
    </head>
    <body>
        <h2>Form Penyewaan Mobil</h2>
        <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama" required><br><br>

            <lebel>No. KTP: </label>
            <input type="number" name="ktp" required><br><br>

            <lebel>Jenis Mobil: </lebel>
            <select name = "mobil" requires>
                <option value = "">--Pilih Mobil--</option>
                <option value = "avanza">Avanza</option>
                <option value = "xenia">Xenia</option>
                <option value = "innova">Innova</option>
                <option value = "alphard">Alphard</option>
                <option value = "fortuner">Fortuner</option>
            </select><br><br>

            <label>Lama Sewa (hari): </label>
            <input type="number" name="lama_sewa" required><br><br>

            <button type="submit" name="submit" value="Submit">Submit</button><br><br>
    </body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $ktp = $_POST['ktp'];
        $mobil = $_POST['mobil'];
        $lama_sewa = $_POST['lama_sewa'];
        $Biaya_ansuransi = 0;

        switch ($mobil) {
            case 'avanza':
                $harga_sewa_per_hari = 300000;
                $Biaya_ansuransi = 15000;
                break;
            case 'xenia':
                $harga_sewa_per_hari = 300000;
                $Biaya_ansuransi = 15000;
                break;
            case 'innova':
                $harga_sewa_per_hari = 500000;
                $Biaya_ansuransi = 25000;
                break;
            case 'alphard':
                $harga_sewa_per_hari = 750000;
                $Biaya_ansuransi = 30000;
                break;
            case 'fortuner':
                $harga_sewa_per_hari = 700000;
                $Biaya_ansuransi = 25000;
                break;
            default:
                $harga_sewa_per_hari = 0;
        }

        $total_biaya = $harga_sewa_per_hari * $lama_sewa + $Biaya_ansuransi;

        echo "<h3>Hasil Penyewaan Mobil:</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>No</th><th>Nama</th><th>No. KTP</th><th>Jenis Mobil</th><th>Lama Sewa (hari)</th><th>Harga Sewa per Hari</th><th>Biaya Ansuransi</th><th>Total Biaya</th></tr>";
        echo "<tr>";
        echo "<td>1</td>";
        echo "<td>$nama</td>";
        echo "<td>$ktp</td>";
        echo "<td>$mobil</td>";
        echo "<td>$lama_sewa</td>";
        echo "<td>Rp " . number_format($harga_sewa_per_hari, 2, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($Biaya_ansuransi, 2, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($total_biaya, 2, ',', '.') . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</html>
