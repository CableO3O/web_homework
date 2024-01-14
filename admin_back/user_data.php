    <table style="width: 100%;">
        <tr>
            <td style="width: 30%;">
                帳號:
            </td>
            <td style="width: 30%;">
                密碼:
            </td>
            <td style="width: 30%;">
                電子信箱:
            </td>
            <td style="width: 10%;">
                操作
            </td>
        </tr>
    </table>
    <table class="users" style="width: 100%;">
    
    </table>
    <script>
        queryAll();

        function queryAll() {
            $.get("./api/query.php?do=users", (users) => {
                render(users)
            })
        }

        function render(datas) {
            $(".users").html("")
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
                $(".users").append(data_layout)
            })
        }
        function del(userid) {
        let result=confirm('確定要刪除使用者嗎?');
        if (result) {
            $.post('./api/delete_user.php',{id:userid},()=>{          
                alert('刪除成功');
                // console.log(e);
                location.reload();
            })
            
        }
    }
        
    </script>