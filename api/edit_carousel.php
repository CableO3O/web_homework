<?php
include_once "db.php";
$folderPath = "../imgs/";
if (!empty($_FILES['img']['tmp_name'])) {
    $tmp=explode(".",$_FILES['img']['name']);
    $subname=".".end($tmp);
    $filename=date("YmdHis").rand(10000,99999).$subname;
    move_uploaded_file($_FILES['img']['tmp_name'],$folderPath.$filename);
    if (!empty($_POST['user_img']) && file_exists($folderPath . $_POST['user_img'])) {
        unlink($folderPath . $_POST['user_img']);
    }
}else {
    // 沒有上傳新檔案時，保留舊的檔案名稱
    $filename = $_POST['user_img'];
}
$carousel=[
    'id'=>$_POST['id'],
    'img'=>$filename,
    'text'=>$_POST['text'],
    'href'=>$_POST['href'],
    'sh'=>1
];
$Carousel->save($carousel);
to("../back.php?do=web");
