<?php
$mahasiswa = [
    ["nim" => "2205551001", "nama" => "Andi", "umur" => 20, "prodi" => "TI"],
    ["nim" => "2205551002", "nama" => "Budi", "umur" => 19, "prodi" => "TI"],
    ["nim" => "2205551003", "nama" => "Citra", "umur" => 21, "prodi" => "SI"],
    ["nim" => "2205551004", "nama" => "Dewi", "umur" => 20, "prodi" => "TI"],
    ["nim" => "2205551005", "nama" => "Eka", "umur" => 18, "prodi" => "SI"],
    ["nim" => "2205551006", "nama" => "Farid", "umur" => 22, "prodi" => "TI"],
    ["nim" => "2205551007", "nama" => "Gina", "umur" => 19, "prodi" => "TI"],
    ["nim" => "2205551008", "nama" => "Hari", "umur" => 20, "prodi" => "SI"],
    ["nim" => "2205551009", "nama" => "Indah", "umur" => 21, "prodi" => "TI"],
    ["nim" => "2205551010", "nama" => "Joko", "umur" => 20, "prodi" => "TI"],
];

echo "<h3>Data Mahasiswa:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Umur</th><th>Program Studi</th></tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td align='center'>{$mhs['umur']}</td>";
    echo "<td>{$mhs['prodi']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
