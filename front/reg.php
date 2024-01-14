
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="background-color: lightgray;"></div>
            <div class="col-4 text-center">
                <h2 class="mt-5">會員註冊</h2>
                <input type="text" name="acc" id="acc" class="col-3 form-control mt-5" placeholder="請輸入帳號">
                <input type="text" name="pw" id="pw" class="col-3 form-control mt-5" placeholder="請輸入密碼">
                <input type="text" name="pw2" id="pw2" class="col-3 form-control mt-5" placeholder="請再次輸入密碼">
                <input type="text" name="email" id="email" class="col-3 form-control mt-5" placeholder="請輸入電子郵件">
                <input type="button" value="註冊" class="btn btn-primary mt-5 mb-5 form-control" onclick="reg()">
                <p class="mt-5">已經有OO商城帳號?<a href="./login.php">點我登入</a></p>
            </div>
            <div class="col-4" style="background-color: lightgray;"></div>
        </div>
    </div>
    <div class="container-fluid">

    </div>
    <script>
        function reg() {
            let user = {
                acc: $("#acc").val(),
                pw: $("#pw").val(),
                pw2: $("#pw2").val(),
                email: $("#email").val()
            }
            if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '') {
                if (user.pw == user.pw2) {
                    $.post("../api/chk_acc.php", {
                        acc: user.acc
                    }, (res) => {
                        if (parseInt(res) == 1) {
                            alert("帳號重複")
                        } else {
                            $.post("../api/reg.php", user, (res) => {
                                alert("註冊完成，請前往登入");
                                window.location.href = "./login.php";
                            })
                        }
                    })
                } else {
                    alert("密碼錯誤")
                }
            } else {
                alert("不可空白")
            }
        }
    </script>
</body>

</html>