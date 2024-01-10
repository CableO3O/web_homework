<?php include_once "db.php";
$folderPath = "../imgs/";
$good=$Shop->find($_POST['id']);
if (file_exists($folderPath . $good['img'])) {
    unlink($folderPath . $good['img']);
}
$Shop->del($_POST['id']);