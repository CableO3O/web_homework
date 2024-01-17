<?php
$good = $Shop->find($_GET['id']);
?>
<style>
    .good {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        font-size: 24px;
    }

    .text {
        width: 80%;
        border: none;
        background-color: transparent;
        outline: none;
        font-size: 24px;
    }
</style>
<div class="container-fluid" style="height:30%;">
    <div class="row  justify-content-center">
            <div class="col-md-6 col-12" >
                <img style="width: 69%;" src="./imgs/<?= $good['img']; ?>" alt="">
            </div>
            <div class="col-md-6 col-12" style="text-align: left;">
                <input type="hidden" name="user_id" id="user_id" value="<?= (isset($_SESSION['id'])) ? $_SESSION['id'] : ''; ?>">
                <input type="hidden" name="good_id" id="good_id" value="<?= $good['id']; ?>">
                <div class="good mt-5">
                    <label class="" for="name">商品名稱:</label>
                    <input readonly class="text form-control" type="text" name="name" id="name" value="<?= $good['name']; ?>">
                </div>
                <div class="good mt-5">
                    <label class="" for="price">商品價格:</label>
                    <input readonly style="color: red;" class="text form-control" type="text" name="price" id="price" value="<?= $good['price']; ?>">
                </div>
                <div class="good mt-5">
                    <label class="" for="name">商品說明:</label>
                    <input readonly class="text form-control" type="text" name="text" id="text" value="<?= $good['text']; ?>">
                </div>
                <div class="good mt-5">
                    <label class="" for="count">數量:&nbsp;</label>
                    <input style="width: 30%;" class="form-control" type="number" name="count" id="count" value="1">
                </div>
                <?php
                if (isset($_SESSION['id'])) {
                    $check = $Shopcar->count("where `user_id`='{$_SESSION['id']}' and `good_id`='{$_GET['id']}'");
                    if ($check == 0) {
                ?>
                        <button class="btn btn-primary btn-lg mt-5" onclick="add()">加入購物車</button>
                    <?php
                    } else {
                    ?>
                        <button class="btn btn-danger btn-lg mt-5" onclick="del()">從購物車刪除</button>
                    <?php
                    }
                } else {
                    ?>
                    <button class="btn btn-primary btn-lg mt-5" onclick="add()">加入購物車</button>
                <?php
                }
                ?>
            </div>
            
    </div>
</div>
<script>
    function add() {
        let good = {
            user_id: $('#user_id').val(),
            good_id: $('#good_id').val(),
            price: $('#price').val(),
            name: $('#name').val(),
            img: '<?= $good['img']; ?>',
            count: $('#count').val(),
            pay: 0
        }
        $.post("./api/add_shopcar.php", good, (res) => {
            if (parseInt(res) == 1) {
                alert("已加入購物車");
                location.href = "./index.php?do=main";
            } else {
                alert("請先行登入");
                location.href = "./index.php?do=login";

            }
        })
    }

    function del() {
        let good = {
            user_id: $('#user_id').val(),
            good_id: $('#good_id').val(),
        }
        $.post("./api/del_shopcar.php", good, () => {
            alert("已從購物車刪除");
            location.href = "./index.php?do=main";
        })
    }
</script>