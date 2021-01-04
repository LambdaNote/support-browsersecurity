<?php
session_start();
if (isset($_POST['memo']) && $_POST['memo'] !== '') {
    $_SESSION['memo'] = $_POST['memo'];
}
if (!isset($_SESSION['memo']) || $_SESSION['memo'] === '') {
    $_SESSION['memo'] = "なし";
}
?>
<h2> メモ </h2>
<p>保存されたメモ: <?= $_SESSION['memo'] ?></p>
<form method="POST">
    <input type="text" name="memo" class="form-control" placeholder="こんにちは">
    <input type="submit" value="保存">
</form>

<?php
if (isset($_GET['name']) && $_GET['name'] !== '') {
    $name = $_GET['name'];
} else {
    $name = "名無し";
}
$lucks = array('大吉', '吉', '中吉', '小吉', '末吉', '凶', '大凶');
$luck = $lucks[array_rand($lucks)];
?>
<h2> お名前占い </h2>
<p><?= $name ?> さんの運勢は、「<?= $luck ?>」だよ！</p>
<form method="GET">
    <input type="text" name="name">
    <input type="submit" value="占う">
</form>