<?php
include_once "db.php";
$shop=$Shop->find(['id'=>$_POST['good_id']]);
if (isset($_POST['id'])) {
    $Shopcar->save($_POST);
} else {
    if (isset($_SESSION['id']) && $_SESSION['user']=='admin') {
        echo 2;
    } else if($shop['user_id']==$_POST['user_id']){
        echo 3;
    }else if (isset($_SESSION['id'])) {
        $Shopcar->save($_POST);
        echo 1;
    } else {
        echo 0;
    }
}