<?php
$pdo=NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8','root','');
$sql=$pdo->prepare('update kadai_bookmark set name=?, author=?, who=? where id=?');
$sql->execute([htmlspecialchars($_REQUEST['name']),$_REQUEST['author'],$_REQUEST['who'],$_REQUEST['id']]);
?>

<?php require 'read.php'; ?>