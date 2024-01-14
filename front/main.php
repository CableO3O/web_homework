<style>
    .goods:hover{
        background-color: lightgray;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="./imgs/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./imgs/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imgs/3.jpg" class="d-block w-100" alt="...">
                    </div>
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
    <div class="row justify-content-around ">
        <?php
        $goods = $Shop->all();
        foreach ($goods as $good) {
        ?>
            <div class="col-2 mt-3 me-5" style="border: 3px solid lightgray;margin:auto;">
                <a href="" style=" text-decoration-line: none;" class="goods">
                    <div style="">
                        <img src="./imgs/<?=$good['img'];?>" alt="" style="width: 200px; height:200px;padding-right:10px;box-sizing:border-box">
                    </div>
                    <div>
                        <span>商品名稱:<?=$good['name'];?></span>
                    </div>
                    <div>
                        <span style="color: red;">價格:<?=$good['price'];?></span>
                    </div>
                    
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<footer class="container-fluid">

</footer>
