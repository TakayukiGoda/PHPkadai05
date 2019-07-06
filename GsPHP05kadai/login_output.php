<?php session_start(); ?>
BOOK MARK<br>
<?php
unset($_SESSION['gs_user_table']);
$pdo= NEW PDO('mysql:host=localhost;dbname=php_kadai;charset=utf8','root','');
$sql=$pdo->prepare('select * from gs_user_table where login=? and password=?');
$sql->execute([$_REQUEST['login'],$_REQUEST['password']]);
foreach($sql as $row){
      $_SESSION['gs_user_table']=[
            'id'=>$row['id'],'name'=>$row['name'],
            'address'=>$row['address'],'login'=>['login'],
            'password'=>$row['password']];
}
if(isset($_SESSION['gs_user_table'])){
      echo 'ログイン成功しました。';
      echo '<p>一覧から編集・削除を行う</p>';
      echo '<a href="edit.php">編集・削除</a>';
}else{
      echo 'ログイン名またパスワードが違います。';
}
?>



