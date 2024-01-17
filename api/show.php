<?php include_once "db.php";

$row=$Carousel->find($_POST['id']);
$row['sh']=($row['sh']==1)?0:1;
$Carousel->save($row);