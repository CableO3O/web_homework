<?php
include_once "db.php";

if (!empty($_FILES['img']['tmp_name'])) {
    $tmp=explode(".",$_FILES['img']['name']);
    $subname=".".end($tmp);
    $filename=date("YmdHis").rand(10000,99999).$subname;
    move_uploaded_file($_FILES['img']['tmp_name'],"../imgs/".$filename);
}
$good=[
    'user_id'=>$_POST['id'],
    'name'=>$_POST['name'],
    'price'=>$_POST['price'],
    'img'=>$filename
];
$Shop->save($good);
to("../user.php?do=market");
