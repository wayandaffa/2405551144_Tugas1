<?php
$out = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = trim($_POST['nama'] ?? ''); $umur = trim($_POST['umur'] ?? ''); $jk = $_POST['jk'] ?? ''; $alamat = trim($_POST['alamat'] ?? '');
  if (!$nama || !$umur || !$jk || !$alamat) $out = "Isi semua field.";
  else $out = "Nama: $nama. Umur: $umur. Jenis kelamin: $jk. Alamat: $alamat.";
}
?>
<form method="post">
  <input name="nama" placeholder="Nama"><br>
  <input name="umur" placeholder="Umur"><br>
  <select name="jk"><option value="">--JK--</option><option>Laki-laki</option><option>Perempuan</option></select><br>
  <input name="alamat" placeholder="Alamat"><br>
  <button type="submit">Kirim</button>
</form>
<?php if ($out) echo "<p>$out</p>"; ?>
