<?php
if (!isset($_SESSION['user'])) {
    to("./index.php");
}
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

<div class="container-fluid">
    <table style="width: 100%;">
        <tr>
            <th style="width: 5%;">編號</th>
            <th style="width: 20%;">商品圖片</th>
            <th style="width: 20%;">商品名稱</th>
            <th style="width: 15%;">商品價格</th>
            <th style="width: 15%;">商品數量</th>
            <th style="width: 15%;">總價</th>
            <th style="width: 10%;">操作</th>
        </tr>
    </table>
        <?php
        $count=$Shopcar->count("where `user_id`='{$_SESSION['id']}' and `pay`=0");
            if ($count==0) {
                ?>
                <div class="container-fluid text-center">
                    <h1>購物車內目前沒有訂單</h1>
                </div>
                <?php
            }else{
        ?>
        <table style="width: 100%;">
        <?php
        $shopcar = $Shopcar->all("where `user_id`='{$_SESSION['id']}' and `pay`=0");
        foreach ($shopcar as $key => $good) {
        ?>
            <tr>
                <input type="hidden" name="id" id="id<?= $good['id']; ?>" value="<?= $good['id']; ?>">
                <td><?= $key + 1; ?></td>
                <td>
                    <img src="./imgs/<?= $good['img']; ?>" style="width: 250px;height:200px" alt="">
                </td>
                <td>
                    <input class="text" readonly type="text" name="name" id="name" value="<?= $good['name']; ?>">
                </td>
                <td>
                    <input class="text" readonly type="text" name="price" id="price<?= $good['id']; ?>" value="<?= $good['price']; ?>">
                </td>
                <td>
                    <input class="form-control" onchange="total(<?= $good['id']; ?>)" style="width: 40%;" type="number" name="count" id="count<?= $good['id']; ?>" value="<?= $good['count']; ?>">
                </td>
                <td>
                    <input class="text" readonly type="number" name="total" id="total<?= $good['id']; ?>" value="<?= $good['price'] * $good['count']; ?>">
                </td>
                <td>
                    <button class="btn btn-success" onclick="buy(<?= $good['id']; ?>)">確認購買</button>
                    <button class="btn btn-danger" onclick="del(<?= $good['id']; ?>)">刪除</button>
                </td>
            </tr>
        <?php
        }}
        ?>
    </table>
</div>
<script>
    function total(goodId) {
        let num1 = Number($('#price' + goodId).val());
        let num2 = Number($('#count' + goodId).val());
        let total = $('#total' + goodId);
        console.log(num1);
        console.log(num2);
        console.log(total);
        result = num1 * num2;
        total.val(result);
    }
    function buy(goodId) {
        let good = {
            id: $('#id' + goodId).val(),
            count: $('#count' + goodId).val(),
            pay:1
        }
        $.post("./api/add_shopcar.php",good,()=>{
            alert("購買成功");
            location.reload()
        })
    }
    function del(goodId) {
        $.post("./api/del_shopcar.php",id={goodId},()=>{
            alert("刪除成功");
            location.reload()
        })
    }
</script>