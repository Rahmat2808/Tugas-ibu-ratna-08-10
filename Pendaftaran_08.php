<html>
    <head>
        <title>Menghitung Total Biaya</title>
    </head>
    <body>
        <h2>Darftar data diri siswa</h2>
        <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama" required><br><br>

            <lebel>NIS: </label>
            <input type="number" name="nis" required><br><br>

            <lebel>Kelas: </lebel>
            <select name = "kelas" requires>
                <option value = "">--Kelas--</option>
                <option value = "satu">X</option>
                <option value = "dua">XI</option>
                <option value = "tiga">XII</option>
            </select><br><br>

            <button type="submit" name="submit" value="Submit">Submit</button><br><br>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nis = $_POST['nis'];
            $kelas = $_POST['kelas'];

            switch ($kelas) {
                case 'satu':
                    $kelas = "X";
                    $uang_gedung = 800000;
                    $spp_bulan_juli = 90000;
                    $seragam = 125000;
                    break;
                case 'dua':
                    $kelas = "XI";
                    $uang_gedung = 500000;
                    $spp_bulan_juli = 75000;
                    $seragam = 100000;
                    break;
                case 'tiga':
                    $kelas = "XII";
                    $uang_gedung = 500000;
                    $spp_bulan_juli = 75000;
                    $seragam = 100000;
                    break;
                default:
                    $kelas = "Tidak diketahui";
            }

            $total_biaya = $uang_gedung + $spp_bulan_juli + $seragam;
            
            echo "<h3>Hasil Pendaftaran:</h3>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>No</th><th>Nama</th><th>NIS</th><th>Kelas</th><th>SPP Bulan Juli</th><th>Seragam</th><th>Jumlah Total</th></tr>";
            echo "<tr>";
            echo "<td>1</td>";
            echo "<td>$nama</td>";
            echo "<td>$nis</td>";
            echo "<td>$kelas</td>";
            echo "<td>Rp " . number_format($spp_bulan_juli, 2, ',', '.') . "</td>";
            echo "<td>Rp " . number_format($seragam, 2, ',', '.') . "</td>";
            echo "<td>Rp " . number_format($total_biaya, 2, ',', '.') . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        ?>
    </body>
</html>
