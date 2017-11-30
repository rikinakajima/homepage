<?php
	echo '
<!-- / メイン画像 -->
<div id="wrapper" align="left">
  <section class="gridWrapper" id="sub">
  <article id="main_area1"  style="margin-bottom:30px;">
	  <h2>お問い合わせフォーム</h2>
  </article>
  <article class="col4" style="margin-top:30px;">
	  <form action="contact.php" method="post">
	  <table class="contact" style="margin-top:0;">
        <tbody>
			<tr>
            	<th>名前</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30"></td>
            </tr>
            <tr>
            	<th>フリガナ</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30"></td>
            </tr>
            <tr>
            	<th>住所</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30"></td>
            </tr>
            <tr>
            	<th>メールアドレス</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30"></td>
            </tr>
            <tr>
            	<th>メールアドレス(確認)</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30"></td>
            </tr>
            <tr>
            	<th>電話番号</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30"></td>
            </tr>
            <tr>
            	<th>お問い合わせ内容</th>
                <td><textarea class="contact_input" name="" rows="10" cols="61"></textarea></td>
            </tr>
       </tbody>
	</table>
	<p class="btn" style="margin-top:50px;">
		<input class="submit"style="padding:10px 30px;" type="submit" value="送信">
	</p>
	</form>
　</article>
  </section>
</div>';
?>

