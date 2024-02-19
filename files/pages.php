<?php


include __DIR__ . "/header.php";


if (!db_rows("pages WHERE id = '{$id}'")) {
	echo fh_alerts($lang['alerts']['wrong']);
	$sidebar = false;
	include __DIR__ . '/footer.php';
	exit;
}

$rs = ($id ? db_rs("pages WHERE id = '{$id}'") : '');

?>
<div class="pt-breadcrump">
	<li><a href="<?= path ?>"><i class="fas fa-home"></i> <?= $lang['menu']['home'] ?></a></li>
	<li><?= $rs['title'] ?></li>
</div>

<div class="pt-title">
	<p><?= (fh_bbcode($rs['content'])) ?></p>
</div>

<?php
include __DIR__ . "/footer.php";
?>