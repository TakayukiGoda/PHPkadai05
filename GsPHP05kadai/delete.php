<?php

$pdo=NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8','root','');
$sql=$pdo->prepare('delete from kadai_bookmark where id=?');
$sql->execute([$_REQUEST['id']]);
echo '削除に成功しました。現在の登録は以下の通りです。';

require 'read.php';

?>