<h1>網頁管理</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3 style="height:5vh">輪播圖片管理</h3>
        </div>
        <div class="col-6">
            <button type="button" style="float:right;height:5vh" class="btn btn-primary fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
                新增
            </button>
        </div>
    </div>

</div>

<div class="container-fluid">
    <table style="width: 100%;">
        <tr>
            <th width='10%'>編號</th>
            <th width='25%'>輪播圖片</th>
            <th width='25%'>圖片說明</th>
            <th width='20%'>圖片連結</th>
            <th width='20%'>操作</th>
        </tr>
        <?php
        $carousels = $Carousel->all();
        foreach ($carousels as $key => $carousel) {

        ?>
            <tr>
                <td><?= $key + 1; ?></td>
                <td><img style="width: 250px; height:100px;" src="./imgs/<?= $carousel['img']; ?>"></td>
                <td><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="<?= $carousel['text']; ?>"></td>
                <td><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="<?= $carousel['href']; ?>"></td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#carousel<?= $carousel['id']; ?>">
                        編輯
                    </button>
                    <input type="button" value="刪除" class="btn btn-danger" onclick="del(<?= $carousel['id']; ?>)">
                    <button class="show-btn btn btn-secondary" data-id='<?= $carousel['id']; ?>'><?= ($carousel['sh'] == 1) ? '顯示' : '隱藏'; ?></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<div class="container-fluid">

<!--add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">新增輪播圖片</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./api/add_carousel.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="mt-5">
                        <label style="width: 20%;" for="img">輪播圖片:</label>
                        <input style="width: 100%;" type="file" name="img" class="form-control">
                    </div>
                    <div class="mt-5">
                        <label for="text">圖片說明:</label>
                        <input style="width: 100%;" class="form-control" type="text" name="text">
                    </div>
                    <div class="mt-5">
                        <label for="href">圖片連結</label>
                        <input style="width: 100%;" class="form-control" type="text" name="href">
                    </div>
                    <input type="submit" value="確定" class="btn btn-primary mt-5 mb-5 form-control">
                </div>
            </form>
        </div>
    </div>
</div>
<!--edit Modal -->
<div class="modal fade" id="carousel<?= $carousel['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">編輯輪播圖片</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./api/edit_carousel.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $carousel['id']; ?>">
                    <input type="hidden" name="user_img" id="user_img" value="<?= $carousel['img']; ?>">
                    <div class="mt-5">
                        <label style="width: 20%;" for="img">輪播圖片:</label>
                        <input style="width: 100%;" type="file" name="img" class="form-control">
                    </div>
                    <div class="mt-5">
                        <label for="text">圖片說明:</label>
                        <input style="width: 100%;" class="form-control" type="text" name="text" value="<?= $carousel['text']; ?>">
                    </div>
                    <div class="mt-5">
                        <label for="href">圖片連結</label>
                        <input style="width: 100%;" class="form-control" type="text" name="href" value="<?= $carousel['href']; ?>">
                    </div>
                    <input type="submit" value="確定" class="btn btn-primary mt-5 mb-5 form-control">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function del(carouselid) {
        let result = confirm('確定要刪除嗎?');
        if (result) {
            $.post('./api/delete_carousel.php', {
                id: carouselid
            }, () => {
                alert('刪除成功');
                location.reload();
            })

        }
    }
    $(".show-btn").on('click',function(){
        let id=$(this).data('id');
        $.post("./api/show.php",{id},()=>{
            $(this).text(($(this).text()=='顯示')?"隱藏":"顯示");
        })
    })
</script>