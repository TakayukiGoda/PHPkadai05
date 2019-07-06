<p>登録一覧</p>

<?php
$pdo= NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8',
      'root','');

foreach($pdo->query('select * from kadai_bookmark') as $row){
      echo '<p>';
      echo $row['id'],':';
      echo $row['name'],':';
      echo $row['author'],':';
      echo $row['who'];
      echo '</P>';
}
?>