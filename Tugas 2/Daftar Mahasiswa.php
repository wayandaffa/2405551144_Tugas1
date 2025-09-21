<?php
$mahasiswa = [
    "2205551001" => "Andi",
    "2205551002" => "Budi",
    "2205551003" => "Citra",
    "2205551004" => "Dewi",
    "2205551005" => "Eka"
];

echo "<h3>Daftar Mahasiswa:</h3>";
echo "<ul>";
foreach ($mahasiswa as $nim => $nama) {
    echo "<li>NIM: $nim - Nama: $nama</li>";
}
echo "</ul>";
?>
