<?php
include_once "db.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];

$login=$Login->count(['acc'=>$acc,'pw'=>$pw]);

// dd($checkacc);
if ($acc='admin'&& $pw='1234') {
    if ($login) {
        $_SESSION['login']=$acc;
        to("../back.php");
    }else{
        to("../front/login.php?error=帳號或密碼錯誤");
    }
}else{
    if ($login) {
        $_SESSION['login']=$acc;
        to("../index.php");
    }else{
        to("../front/login.php?error=帳號或密碼錯誤");
    }
}