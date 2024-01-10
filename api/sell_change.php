<?php
include_once "db.php";
$folderPath = "../imgs/"; // 將此路徑替換為您的資料夾路徑


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
$good=[
    'id'=>$_POST['id'],
    'user_id'=>$_POST['user_id'],
    'name'=>$_POST['name'],
    'price'=>$_POST['price'],
    'img'=>$filename
];
$Shop->save($good);
to("../user.php?do=market");
