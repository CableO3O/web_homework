<!doctype html>
<html lang="en">


<div class="container-fluid" >
    <div class="row">
        <div class="col-4" style="background-color: lightgray;"></div>
        <div class="col-4 text-center" style="height:70vh">
            <h2 class="mt-5">會員登入</h2>
            <input type="text" name="acc" id="acc" class="col-3 form-control mt-5" placeholder="請輸入帳號">
            <input type="text" name="pw" id="pw" class="col-3 form-control mt-5" placeholder="請輸入密碼">
            <input type="submit" value="登入" class="btn btn-primary mt-5 mb-5 form-control" onclick="login()">

            <p class="mt-5">沒有OO商城帳號?<a href="index.php?do=reg">點我註冊</a></p>
        </div>
        <div class="col-4" style="background-color: lightgray;"></div>
    </div>
</div>
<div class="container-fluid">

</div>
<script>
    function login() {

        $.post("./api/chk_acc.php", {
            acc: $("#acc").val()
        }, (res) => {
            if (parseInt(res) == 0) {
                alert("查無帳號")
            } else {
                $.post("./api/chk_pw.php", {
                    acc: $("#acc").val(),
                    pw: $("#pw").val()
                }, (res) => {
                    if (parseInt(res) == 1) {
                        if ($("#acc").val() == 'admin') {
                            location.href = './back.php'
                        } else {
                            location.href = './index.php'
                        }
                    } else {
                        alert("密碼錯誤")
                    }
                })
            }
        })
    }
</script>
</body>

</html>