<div class="container-fluid">
    <table style="width: 100%;">
        <tr>
            <th width='10%'>編號</th>
            <th width='30%'>商品圖片</th>
            <th width='30%'>商品名稱</th>
            <th width='15%'>商品價格</th>
            <th width='15%'>操作</th>
        </tr>
        <?php
        $user = $User->all(['acc' => $_SESSION['user']]);
        foreach ($user as $val) {
            $rows = $Shop->all(['user_id' => $val['id']]);
            foreach ($rows as $key => $value) {
                dd($value);
        ?>
                <tr>
                    <td width='10%'><?= $key + 1; ?></td>
                    <td width='30%'><img style="width: 250px; height:250px;" src="./imgs/<?= $value['img']; ?>" alt=""></td>
                    <td width='30%'><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="<?= $value['name']; ?>"></td>
                    <td width='15%'><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="<?= $value['price']; ?>"></td>
                    <td width='15%'>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            修改
                        </button>
                        <input type="button" value="下架" class="btn btn-danger">
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">修改商品內容</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./api/sell_change.php" method="post" enctype="multipart/form-data">
                                    <div class="row" style="text-align: left;">
                                        <input type="hidden" name="id" id="id" value="<?= $value['id']; ?>">
                                        <input type="hidden" name="user_id" id="user_id" value="<?= $value['user_id']; ?>">
                                        <input type="hidden" name="user_img" id="user_img" value="<?= $value['img']; ?>">
                                        <label for="name" class="mt-5">商品名稱:</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?= $value['name']; ?>">
                                    </div>
                                    <div class="row" style="text-align: left;">
                                        <label for="number" class="mt-5">商品價格:</label>
                                        <input type="number" name="price" id="price" class="form-control" value="<?= $value['price']; ?>">
                                    </div>
                                    <div class="row" style="text-align: left;">
                                        <label for="img" class="mt-5">商品圖片:</label>
                                        <input type="file" name="img" id="img" class="form-control">
                                    </div>
                                    <input type="submit" value="修改確定" class="btn btn-primary mt-5 mb-5 form-control">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </table>
</div>