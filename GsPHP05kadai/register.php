<?php session_start();?>


<h1>〜会員登録〜</h1>


<?php
$name=$address=$login=$password='';
if(isset($_SESSION[''])){
      $name=$_SESSION['gs_user_table']['name'];
      $address=$_SESSION['gs_user_table']['address'];
      $login=$_SESSION['gs_user_table']['login'];
      $password=$_SESSION['gs_user_table']['password'];
};


echo '<form action="register_output.php" method="post">';
echo '<table>';
echo '<tr><td>お名前</td><td>';
echo '<input type="text" name="name" value="',$name,'">';
echo '</td></tr>';
echo '<tr><td>ご住所</td><td>';
echo '<input type="text" name="address" value="',$address,'">';
echo '</td></tr>';
echo '<tr><td>ログイン名</td><td>';
echo '<input type="text" name="login" value="',$login,'">';
echo '<tr><td>パスワード</td><td>';
echo '<input type="password" name="password" value="',$password,'">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>