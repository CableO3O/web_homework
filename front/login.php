<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<script src="../js/jquery-1.9.1.min.js"></script>
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
                <input type="text" name="acc" id="acc" class="col-3 form-control mt-5" placeholder="請輸入帳號">
                <input type="text" name="pw" id="pw" class="col-3 form-control mt-5" placeholder="請輸入密碼">
                <input type="submit" value="登入" class="btn btn-primary mt-5 mb-5 form-control" onclick="login()">
                    
                <p class="mt-5">沒有OO商城帳號?<a href="">點我註冊</a></p>
            </div>
            <div class="col-4" style="background-color: lightgray;"></div>
        </div>
    </div>
    <div class="container-fluid">

    </div>
    <script>
        function login() {
            
            $.post("../api/chk_acc.php",{acc:$("#acc").val()},(res)=>{
                if (parseInt(res)==0){
                    alert("查無帳號")
                }else{
                    $.post("../api/chk_pw.php",{acc:$("#acc").val(),pw:$("#pw").val()},(res)=>{
                        if (parseInt(res)==1) {
                            if ($("#acc").val()=='admin') {
                                location.href='../back.php'
                            }else{
                                location.href='../index.php'
                            }
                        }else{
                            alert("密碼錯誤")
                        }
                    })
                }
            })
        }
    </script>
</body>

</html>