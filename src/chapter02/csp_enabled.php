<?php
header("Content-Security-Policy: script-src 'self' http://example.com; frame-src 'self';");
?>
<?= $_GET['q']; ?>
<form method="GET">
  <input type="text" name="q">
  <input type="submit">
</form>