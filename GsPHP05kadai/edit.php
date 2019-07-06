
<table>
<tr>
<th>登録番号</th>
<th>本</th>
<th>著者</th>
<th>こんな人におすすめ</th>
</tr>

<?php
$pdo= NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8','root','');
foreach($pdo->query('select * from kadai_bookmark') as $row){
      echo '<form action="update.php" method="post">';
      echo '<input type="hidden" name="id" value="',$row['id'],'">';
      echo '<tr><td>',$row['id'],'</td>';
      echo '<td>';
      echo '<input type="text" name="name" value="',$row['name'],'">';
      echo '</td>';
      echo '<td>';
      echo '<input type="text" name="author" value="',$row['author'],'">';
      echo '</td>';
      echo '<td>';
      echo '<input type="text" name="who" value="',$row['who'],'">';
      echo '</td>';
      echo '<td><input type="submit" value="更新"></td>';
      
      echo '<td><a href="delete.php?id=',$row['id'],'">削除</td></tr>';

      echo '</form>';
      echo '<br>';
}

?>
<p>ログアウト</p>
<a href='logout.php'> ログアウトを実行する</a>
