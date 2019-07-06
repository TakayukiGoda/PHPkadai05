<?php session_start(); ?>

<?php
if(isset($_SESSION['gs_user_table'])){
      unset($_SESSION['gs_uset_table']);
      echo 'ログアウトしました';
}else{
      echo 'すでにログアウトしています';
}?>
