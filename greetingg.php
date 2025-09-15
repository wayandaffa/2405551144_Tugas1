<?php
$name = '';
$greeting = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
  if ($name !== '') $greeting = "Halo, $name — selamat belajar PHP!";
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Ucapan</title></head><body>
  <h2>Form Ucapan</h2>
  <form method="post">
    <input type="text" name="name" placeholder="I Wayan Daffa Adhirajasa">
    <button type="submit">Kirim</button>
  </form>
  <?php if ($greeting) echo "<p><strong>$greeting</strong></p>"; ?>
</body></html>
