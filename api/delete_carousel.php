<?php include_once "db.php";
$folderPath = "../imgs/";
$carousel=$Carousel->find($_POST['id']);
if (file_exists($folderPath . $carousel['img'])) {
    unlink($folderPath . $carousel['img']);
}
$Carousel->del($_POST['id']);