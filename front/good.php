<?php
$good = $Shop->find($_GET['id']);
// dd($good);
$users = $User->all(['acc' => $_SESSION['user']]);
// dd($users);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2" style="background-color: lightgray;"></div>
        <div class="col-8 text-center" style="height:70vh">
            <div class="row">
                <div class="col-6">
                    <img src="./imgs/<?= $good['img']; ?>" alt="">
                </div>
                <div class="col-6" style="text-align: left;">
                    <?php
                    foreach ($users as $user) {
                    ?>
                        <input type="hidden" name="user_id" id="user_id" value="<?= $user['id']; ?>">
                    <?php
                    }
                    ?>
                    <input type="hidden" name="good_id" id="good_id" value="<?= $good['id']; ?>">
                    <label class="mt-3" for="name">商品名稱:</label>
                    <input readonly class=" form-control" type="text" name="name" id="name" value="<?= $good['name']; ?>">
                    <label class="mt-3" for="price">商品價格:</label>
                    <input readonly class=" form-control" type="text" name="price" id="price" value="<?= $good['price']; ?>">
                    <label class="mt-3" for="name">商品說明:</label>
                    <input readonly class=" form-control" type="text" name="text" id="text" value="<?= $good['text']; ?>">

                </div>
            </div>
            <div class="col-12 mt-5">
                <button class="btn btn-primary btn-lg" onclick="add()">加入購物車</button>
            </div>
        </div>
        <div class="col-2" style="background-color: lightgray;"></div>
    </div>
</div>
<script>
    function add() {
        let good = {
            user_id: $('#user_id').val(),
            good_id: $('#good_id').val(),
            price: $('#price').val(),
            name: $('#name').val(),
            img: <?= $good['img']; ?>
        }
        $.post("./api/update.php", user, () => {
            alert("修改完成")
        })
    }
</script>