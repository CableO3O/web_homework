<?php
$good = $Shop->find($_GET['id'])
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
                    <h1>商品名稱:<?= $good['name']; ?></h1>
                    <h3 class="mt-5" style="background-color: lightgray;color:red">$:<?= $good['price']; ?></h3>
                    <h5 class="mt-5">商品說明:<?= $good['text']; ?></h5>
                    
                </div>
            </div>
            <div class="col-12 mt-5">
                <button class="btn btn-primary btn-lg">加入購物車</button>
            </div>
        </div>
        <div class="col-2" style="background-color: lightgray;"></div>
    </div>
</div>