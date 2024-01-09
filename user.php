<?php include_once "./api/db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/030ac11f0f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/jquery-1.9.1.min.js"></script>
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 250px;
      padding-top: 50px;
      background-color: lightsalmon;
      color: white;
    }

    .sidebar a {
      padding: 10px;
      display: block;
      color: white;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #555;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <a href="index.php" class="fa-solid fa-house">返回首頁</a>
    <a href="?do=user_data">會員資料</a>
    <a href="?do=market">我的賣場</a>
    <a href="?do=sell">上架物品</a>
  </div>

  <div class="content">
    <?php
    $do = $_GET['do'] ?? 'user_data';
    $file = "./front/{$do}.php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "./front/user_data.php";
    }

    ?>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>