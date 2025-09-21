<?php
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n = $_POST['n'] ?? '';
  if ($n === '' || !is_numeric($n) || intval($n) != $n) $msg = "Masukkan bilangan bulat.";
  else $msg = (intval($n) % 2 === 0) ? "$n adalah GENAP." : "$n adalah GANJIL.";
}
?>
<form method="post">
  <input name="n" placeholder="Masukkan bilangan bulat">
  <button type="submit">Cek</button>
</form>
<?php if ($msg) echo "<p>$msg</p>"; ?>
