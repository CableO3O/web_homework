<?php
include_once "db.php";

$Shopcar->q("delete from shopcar where `user_id`='{$_POST['user_id']}' and `good_id`='{$_POST['good_id']}'");