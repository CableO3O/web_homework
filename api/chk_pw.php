<?php include_once "db.php";
$res=$User->count($_POST);
$users = $User->all(['acc' => $_SESSION['user']]);
foreach ($users as $user) {
    $_SESSION['id']=$user['id'];
}

if ($res) {
    $_SESSION['user']=$_POST['acc'];
}
echo $res;
// $res=$User->count(['acc'=>$_POST['acc']]);

// if ($res>0) {
    
//     $res=$User->count(['pw'=>$_POST['pw']]);
//     if($res>0){
//         echo 1;
//     }else{
//         echo 2;
//     }
// }else{
//     echo 0;
// }