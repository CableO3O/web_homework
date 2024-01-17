<?php
include_once "db.php";
if (!isset($_POST['id'])) {
    $Shopcar->save($_POST);
}else{
    if (isset($_SESSION['id'])) {
        $Shopcar->save($_POST);
        echo 1;
    }else{
        echo 0;
    }
}