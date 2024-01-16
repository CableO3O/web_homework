<h1>商品管理</h1>
<table style="width: 100%;">
    <tr>
        <td style="width: 20%;">
            商品圖片:
        </td>
        <td style="width: 13%;">
            商品名稱:
        </td>
        <td style="width: 13%;">
            商品賣家:
        </td>
        <td style="width: 13%;">
            商品價格:
        </td>
        <td style="width: 30%;">
            商品說明:
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
        $.get("./api/query.php?do=all", (goods) => {
            render(goods)
        })
    }

    function render(datas) {
        $(".goods").html("")
        let data_layout;
        datas.forEach((data, idx) => {
            data_layout = `
                <tr class='mt-5'>
                    <td width='20%'><img style="width: 250px; height:250px;" src="./imgs/${data.img}" alt=""></td>
                    <td width='13%'><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="${data.name}"></td>
                    <td width='13%'><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="${data.user_name}"></td>
                    <td width='13%'><input readonly style="width: 80%;" class="form-control" type="text" name="" id="" value="${data.price}"></td>
                    <td width='30%'><textarea readonly name="text" id="text" class="form-control"  cols="30" rows="10">${data.text}</textarea>
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