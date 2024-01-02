<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid" style="background-color: lightblue;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">OO商場</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">賣家商場</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">客服中心</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="background-color: lightgray;"></div>
            <div class="col-4 text-center">
                <h2 class="mt-5">會員登入</h2>
                <form action="../api/login.php" method="post" class="form-control">
                <input type="text" name="acc" id="acc" class="col-3 form-control mt-5" placeholder="請輸入帳號">
                <input type="text" name="pw" id="pw" class="col-3 form-control mt-5" placeholder="請輸入密碼">
                <input type="submit" value="送出" class="btn btn-primary mt-5 mb-5 form-control">
                    <?php
                    if (isset($_GET['error'])) {
                       echo "<span style=color:red>";
                       echo $_GET['error'];
                       echo "</span>";
                    }
                    ?>
                </form>
                <p class="mt-5">沒有OO商城帳號?<a href="">點我註冊</a></p>
            </div>
            <div class="col-4" style="background-color: lightgray;"></div>
        </div>
    </div>
    <div class="container-fluid">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>