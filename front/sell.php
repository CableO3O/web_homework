<?php
$rows = $User->all(['acc' => $_SESSION['user']]);
foreach ($rows as $user) {
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <h2 class="mt-5">上架物品</h2>
                <form action="./api/sell.php" method="post" enctype="multipart/form-data">
                    <div class="row" style="text-align: left;">
                        <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                        <label for="name" class="mt-5">商品名稱:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="row" style="text-align: left;">
                        <label for="number" class="mt-5">商品價格:</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    <div class="row" style="text-align: left;">
                        <label for="img" class="mt-5">商品圖片:</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
                    <div class="row" style="text-align: left;">
                        <label for="name" class="mt-5">商品說明:</label>
                        <textarea name="text" id="text" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="上架" class="btn btn-primary mt-5 mb-5 form-control">
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<?php
}
?>
