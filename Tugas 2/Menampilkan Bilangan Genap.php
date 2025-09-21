<?php
if (isset($_POST['awal']) && isset($_POST['akhir'])) {
    $awal = (int)$_POST['awal'];
    $akhir = (int)$_POST['akhir'];

    if ($awal < $akhir) {
        echo "<h3>Bilangan Genap dari $awal sampai $akhir:</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>No</th><th>Bilangan Genap</th></tr>";
        
        $no = 1;
        for ($i = $awal; $i <= $akhir; $i++) {
            if ($i % 2 == 0) {
                echo "<tr>";
                echo "<td align='center'>$no</td>";
                echo "<td align='center'>$i</td>";
                echo "</tr>";
                $no++;
            }
        }
        
        echo "</table>";
    } else {
        echo "<p style='color:red;'>⚠️ Syarat: Angka awal harus lebih kecil dari angka akhir.</p>";
    }
}
?>

<form method="post">
    <label>Masukkan Angka Awal: <input type="number" name="awal" required></label><br><br>
    <label>Masukkan Angka Akhir: <input type="number" name="akhir" required></label><br><br>
    <button type="submit">Tampilkan Bilangan Genap</button>
</form>
