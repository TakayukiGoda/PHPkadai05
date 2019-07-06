
<p>BOOKMARK</P>

<form action='write.php' method='post'>
<table>
<tr><td>書籍名</td><td><input type='text' name='name'></td></tr><br>
<tr><td>筆者</td><td><input type='text' name='author'></td></tr><br>
<tr><td>どんな人におすすめ？</td><td><input type='text' name='who'></td></tr><br>
<tr><td><input type='submit' value='BOOKMARK更新'></td></tr>
</table>
</form>

<p>書籍名から探す</P>
<form action='search.php' method='post'>
<input type='text' name='key'>
<input type='submit' value='検索'>
</form>


<h1>会員限定機能〜編集・削除が行なえます〜</h1>
<?php require 'login.php'; ?>


<h1>会員登録</h1>
<a href='register.php'>会員登録はこちら</a>
