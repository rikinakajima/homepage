<?php
	$page =  $_SERVER["SCRIPT_NAME"];

	echo'
		<div>
		<p style="margin-top:30px;text-align:center;">お好みのデザインカラーを選択してください</p>
		    <ul id="colornav">
		      <li style="background:#358cac;"><a href="'.$page.'?color=blue">エメラルドブルー<br>
		      <span></span></a>
		      <li style="background:#00A474;"><a href="'.$page.'?color=green">エメラルドグリーン<br>
		      <span></span></a>
		      <li style="background:#F2B33D"><a href="'.$page.'?color=orange">オレンジ<br>
		      <span></span></a>
		      <li style="background:#E02959"><a href="'.$page.'?color=pink">ピンク<br>
		      <span></span></a>
		      <li style="background:#cc6699"><a href="'.$page.'?color=purple">パープル<br>
		      <span></span></a>
		      <li style="background:#512701"><a href="'.$page.'?color=brown">ブラウン<br>
		      <span></span></a>
		    </ul>
		</div>
	';
?>
