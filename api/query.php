<?php include_once "db.php";

switch ($_GET['do']) {
    case 'all':
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($Shop->all());
        break;
    case '150down':
        header('Content-Type: application/json; charset=utf-8');
        $goods = $Shop->all("where `price`<='150'");
        echo json_encode($goods);
        break;
}
