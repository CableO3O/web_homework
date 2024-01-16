<?php
include_once "db.php";
if (!empty($_FILES['img']['tmp_name'])) {
    $tmp=explode(".",$_FILES['img']['name']);
    $subname=".".end($tmp);
    $filename=date("YmdHis").rand(10000,99999).$subname;
    move_uploaded_file($_FILES['img']['tmp_name'],"../imgs/".$filename);
}
$carousel=[
    'img'=>$filename,
    'text'=>$_POST['text'],
    'href'=>$_POST['href'],
    'sh'=>1
];
$Carousel->save($carousel);
to("../back.php?do=web");
