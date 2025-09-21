<?php
$out = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $score = $_POST['score'] ?? '';
  if ($score === '' || !is_numeric($score)) $out = "Masukkan nilai 0–100.";
  else {
    $s = floatval($score);
    if ($s>100 || $s<0) $out = "Nilai harus 0–100.";
    else {
      if ($s>=85) $g='A'; elseif ($s>=70) $g='B'; elseif ($s>=55) $g='C'; elseif ($s>=40) $g='D'; else $g='E';
      $out = "Nilai $s → Grade $g";
    }
  }
}
?>
<form method="post">
  <input name="score" placeholder="Nilai 0-100">
  <button type="submit">Konversi</button>
</form>
<?php if ($out) echo "<p>$out</p>"; ?>
