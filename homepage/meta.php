<?php
	if (!isset($_GET['color'])) {
		$color = "blue";
		$css = "style_blue.css";
	} else {
		$color = $_GET['color'];
		$css = "style_".$color.".css";
	}
	echo'
		<!DOCTYPE html>
		<html dir="ltr" lang="ja">
		<head>
		<meta charset="UTF-8">
		<title>ホームページ無料で作成します</title>
		<link rel="stylesheet" href="
		'.$css.'
		" type="text/css" media="screen">
			<link rel="SHORTCUT ICON" href="favicon.ico">
			<!--[if lt IE 9]>
			<script src="js/html5.js"></script>
			<script src="js/css3-mediaqueries.js"></script>
			<![endif]--></head>
			<body>
	';

?>
