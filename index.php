<?php include_once "./api/db.php" ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/030ac11f0f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-1.9.1.min.js"></script>
    <style>
        footer {
            background-color: orange;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: orange;">
        <div class="container-fluid" style="background-color: orange; height:10vh">
            <a class="navbar-brand" href="./index.php" style="font-size: 40px; color:white">隨便買商場</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="#">客服中心</a>
                    </li>
                    <?php 
                    if (!isset($_GET['main'])) {
                    
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            商品品項
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item " style="margin-left: 100px;">
                        <form class="d-flex me-5" role="search">
                            <input style="width:800px" class="form-control me-2" type="search" placeholder="輸入關鍵字搜尋商品" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <?php
                if (!isset($_SESSION['user'])) {
                    ?>
                    <div class="d-flex">
                        <a href="index.php?do=reg">註冊</a>
                        &nbsp;|&nbsp;
                        <a href="index.php?do=login">登入</a>
                    </div>
                    <?php
                } else if ($_SESSION['user'] == 'admin') {
                    ?>
                    <div class='me-5'>
                        <span style="color:white">
                            <?= $_SESSION['user']; ?>歡迎
                        </span>
                    </div>
                    <button class='btn btn-danger me-5' onclick="location.href='./api/logout.php'">登出</button>
                    <a href="./back.php" class='btn btn-primary me-5'>返回管理</a>
                    <?php
                } else {
                    ?>
                    <a href="index.php?do=shopcar" style="font-size:30px" class="fa-solid fa-cart-shopping me-5"></a>
                    <div class='me-5'>
                        <?= $_SESSION['user']; ?>歡迎
                    </div>
                    <button class='btn btn-danger me-5' onclick="location.href='./api/logout.php'">登出</button>
                    <a href="user.php" class='btn btn-primary me-5'>會員中心</a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?php
        $do = $_GET['do'] ?? 'main';
        $file = "./front/{$do}.php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./front/main.php";
        }

        ?>
    </div>
    <footer class="container-fluid" style="width: auto;height:20vh">
    <div style="text-align:center">
        <h1>隨便買商場</h1>
    </div>
    </footer>
    <script>

    </script>

</body>

</html>