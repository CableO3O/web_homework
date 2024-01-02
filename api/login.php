<?php
include_once "db.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];

$login=$Login->count(['acc'=>$acc,'pw'=>$pw]);

// dd($checkacc);

if ($login) {
    $_SESSION['login']=$acc;
    to("../index.php");
}else{
    to("../front/login.php?error=帳號或密碼錯誤");
}