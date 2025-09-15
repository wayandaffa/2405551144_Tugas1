<?php
$result = $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $a = $_POST['a'] ?? ''; 
  $b = $_POST['b'] ?? ''; 
  $op = $_POST['op'] ?? '';

  if ($a === '' || $b === '' || !is_numeric($a) || !is_numeric($b)) {
    $error = "Masukkan dua angka valid.";
  } else {
    $a = floatval($a); 
    $b = floatval($b);
    switch ($op) {
      case 'tambah': 
        $result = $a + $b; 
        break;
      case 'kurang': 
        $result = $a - $b; 
        break;
      case 'kali': 
        $result = $a * $b; 
        break;
      case 'bagi': 
        $result = ($b == 0) ? 'Error: bagi 0' : $a / $b; 
        break;
      default: 
        $error = "Pilih operator.";
    }
  }
}
?>
<!doctype html>
<html>
<body>
  <h2>Kalkulator</h2>
  <form method="post">
    <input name="a" placeholder="Angka 1" value="<?= htmlspecialchars($_POST['a'] ?? '') ?>">
    <input name="b" placeholder="Angka 2" value="<?= htmlspecialchars($_POST['b'] ?? '') ?>">
    <select name="op">
      <option value="">Pilih</option>
      <option value="tambah" <?= (($_POST['op'] ?? '')=='tambah')?'selected':'' ?>>+</option>
      <option value="kurang" <?= (($_POST['op'] ?? '')=='kurang')?'selected':'' ?>>-</option>
      <option value="kali" <?= (($_POST['op'] ?? '')=='kali')?'selected':'' ?>>×</option>
      <option value="bagi" <?= (($_POST['op'] ?? '')=='bagi')?'selected':'' ?>>÷</option>
    </select>
    <button type="submit">Hitung</button>
  </form>
  <?php 
    if ($error) {
      echo "<p style='color:red'>$error</p>";
    } elseif ($result !== '') {
      echo "<p>Hasil: $result</p>";
    }
  ?>
</body>
</html>
