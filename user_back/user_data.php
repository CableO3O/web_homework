<?php
$rows = $User->all(['acc' => $_SESSION['user']]);
foreach ($rows as $user) {
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <h2 class="mt-5">會員資料</h2>
                <div class="row" style="text-align: left;">
                    <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                    <label for="acc" class="mt-5">帳號:</label>
                    <input type="text" name="acc" id="acc" class="form-control" value="<?= $user['acc']; ?>">
                </div>
                <div class="row" style="text-align: left;">
                    <label for="pw" class="mt-5">密碼:</label>
                    <input type="text" name="pw" id="pw" class="form-control" value="<?= $user['pw']; ?>">
                </div>
                <div class="row" style="text-align: left;">
                    <label for="email" class="mt-5">電子郵件:</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?= $user['email']; ?>">
                </div>
                <input type="submit" value="修改" class="btn btn-primary mt-5 mb-5 form-control" onclick="updateData()">
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<?php
}
?>
<script>
    function updateData() {
        let user={
            id:$('#id').val(),
            acc:$('#acc').val(),
            pw:$('#pw').val(),
            email:$('#email').val()
        }
        $.post("./api/update.php",user,()=>{
            alert("修改完成")
        })
    }
</script>