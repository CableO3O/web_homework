<h1>商品管理</h1>
<h1>會員帳號管理</h1>
<table style="width: 100%;">
    <tr>
        <td style="width: 30%;">
            商品圖片:
        </td>
        <td style="width: 20%;">
            商品名稱:
        </td>
        <td style="width: 20%;">
            商品賣家:
        </td>
        <td style="width: 20%;">
            商品價格:
        </td>
        <td style="width: 10%;">
            操作
        </td>
    </tr>
</table>
<table class="goods" style="width: 100%;">

</table>
<script>
    queryAll();

    function queryAll() {
        $.get("./api/query.php?do=goods", (goods) => {
            render(goods)
        })
    }

    function render(datas) {
        $(".goods").html("")
        let data_layout;
        datas.forEach((data, idx) => {
            data_layout = `
                <tr class='mt-5'>
                    <td style="width: 30%;">
                        <input readonly class="form-control" style=width:80% type="text" name="${data.acc}" value="${data.acc}"></td>
                    <td style="width: 30%;">
                        <input readonly class="form-control" style=width:80% type="text" name="${data.pw}" value="${data.pw}"></td>
                    <td style="width: 30%;">
                        <input readonly class="form-control" style=width:80% type="text" name="${data.email}" value="${data.email}"></td>
                    <td style="width: 10%;">
                        <input type="button" value="刪除" class="btn btn-danger" onclick="del(${data.id})">
                    </td>
                </tr>
                `
            $(".goods").append(data_layout)
        })
    }

    function del(userid) {
        let result = confirm('確定要刪除商品嗎?');
        if (result) {
            $.post('./api/delete_good.php', {
                id: userid
            }, () => {
                alert('刪除成功');
                // console.log(e);
                location.reload();
            })

        }
    }
</script>