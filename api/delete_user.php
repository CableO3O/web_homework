<?php
include_once "db.php";
$ID=$_POST['id'];
// 把帳號id關聯的商品資料撈出變成陣列
$user_good=$Shop->all("where `user_id`='$ID'");
foreach ($user_good as $good) {
    $Shop->del($good['id']);
}
$User->del($ID);