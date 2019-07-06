<p>BOOKMARK</P>

<?php
$name=$_POST['name'];
$author=$_POST['author'];
$who=$_POST['who'];

$pdo= NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8',
      'root','');
$sql=$pdo->prepare('insert into kadai_bookmark values(null,?,?,?)');
$sql->execute([$name,$author,$who]);
echo '追加しました。';
?>

<?php require 'read.php' ?>