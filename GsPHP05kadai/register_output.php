<?php session_start();?>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8','root','');
$sql=$pdo->prepare('insert into gs_user_table values(null,?,?,?,?)');
$sql->execute([
      $_REQUEST['name'],$_REQUEST['address'],
      $_REQUEST['login'],$_REQUEST['password']
]);
echo '会員登録を行いました。';
?>