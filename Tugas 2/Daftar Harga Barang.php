<?php
$harga = [
    "Nasi Goreng" => 15000,
    "Mie Ayam" => 12000,
    "Soto Ayam" => 18000,
    "Bakso" => 20000,
    "Teh Manis" => 5000
];

echo "<h3>Daftar Harga Barang:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama Barang</th><th>Harga</th></tr>";

foreach ($harga as $barang => $h) {
    echo "<tr>";
    echo "<td align='left'>$barang</td>";
    echo "<td align='right'>Rp " . number_format($h, 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
