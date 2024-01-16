<style>
        /* 常態狀態樣式 */
        .link-container {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            text-decoration: none;
            color: #333;
            transition: background-color 0.1s ease; /* 添加背景顏色的過渡效果 */
        }

        /* 滑鼠懸停狀態樣式 */
        .link-container:hover {
            background-color: #f0f0f0; /* 滑鼠懸停時的背景顏色 */
        }

        /* 按下狀態樣式 */
        .link-container:active {
            background-color: #ccc; /* 按下時的背景顏色 */
        }
    </style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $carousels = $Carousel->all();
                    foreach ($carousels as $key => $carousel) {
                        // dd($carousel)
                    ?>
                        <div style="width: 100%; height:30vh" class="carousel-item <?=($key==0)?'active':'';?>" data-bs-interval="3000">
                            <a href="<?=$carousel['href'];?>">
                                <img src="./imgs/<?=$carousel['img'];?>" class="d-block" style="height: 30vh;width:97vh" alt="<?=$carousel['text'];?>">
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row goods">
    </div>
</div>


<footer class="container-fluid">

</footer>
<script>
    queryAll();

    function queryAll() {
        $.get("./api/query.php?do=all", (goods) => {
            render(goods)
        })
    }

    function render(datas) {
        $(".goods").html("")
        let data_layout;
        datas.forEach((data, idx) => {
            console.log(datas);
            data_layout = `
        <div class="col-sm-2 mt-3 ms-5 col-12" style="margin:auto;">
            <a href="index.php?do=good&id=${data.id}" class='link-container' style=" text-decoration-line: none;">
                <div>
                    <img src="./imgs/${data.img}" alt="" style="width: 20vh; height:20vh;box-sizing:border-box">
                </div>
                <div>
                    <span>商品名稱:${data.name}</span>
                </div>
                <div>
                    <span style="color: red;">價格:${data.price}</span>
                </div>
            </a>
        </div>`
            $(".goods").append(data_layout)
        })
    }
</script>