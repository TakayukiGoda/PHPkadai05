<p>BOOKMARK</p>
検索結果<br>
<?php
$pdo= NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8','root','');
$sql=$pdo->prepare('select * from kadai_bookmark where name like ?');
$sql->execute(['%'.$_REQUEST['key'].'%']);

foreach($sql as $row){
      echo '<tr>';
      echo '<td>',$row['id'],'</td>';
      echo '<td>',$row['name'],':','</td>';
      echo '<td>',$row['author'],':','</td>';
      echo '<td>',$row['who'],':','</td>';
      echo '</td>';
      echo '<br>';
}
?>