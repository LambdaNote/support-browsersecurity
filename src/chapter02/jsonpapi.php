<?php
header('Content-Type: application/javascript');
?>
<?= htmlspecialchars($_GET['callback'], ENT_QUOTES) ?>('cross-origin resource');
