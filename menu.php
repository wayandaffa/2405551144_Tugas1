<?php
$info = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  switch ($_POST['menu'] ?? '') {
    case 'nasi_goreng': $info = "Nasi Goreng — Rp15.000"; break;
    case 'soto': $info = "Soto — Rp12.000"; break;
    case 'mie_ayam': $info = "Mie Ayam — Rp10.000"; break;
    default: $info = "Pilih menu.";
  }
}
?>
<form method="post">
  <select name="menu">
    <option value="">--Pilih--</option>
    <option value="nasi_goreng">Nasi Goreng</option>
    <option value="soto">Soto</option>
    <option value="mie_ayam">Mie Ayam</option>
  </select>
  <button type="submit">Lihat</button>
</form>
<?php if ($info) echo "<p>$info</p>"; ?>
