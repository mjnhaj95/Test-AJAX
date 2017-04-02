<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vd5</title>
    <style>
        .main_left{
            float: left;
        }
        .main_right{
            float: left;
        }
    </style>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#demo1").load("demo1.php");
            
            $("#tinh").click(function(){
               var txta = $("#txtA").val();
               var txtb = $("#txtB").val();
               $.get("tinhtoan.php",{a: txta, b: txtb},function(data){
                    $("#resultTinh").html(data);
               });

            }),
            $("#txtUn").blur(function(){
                var txtUn = $(this).val();
                $.get("checkUsername.php",{un: txtUn},function(data){
                    if(data == 0){
                        $("#resultUn").html("Hợp lệ");
                        $("#resultUn").css("color","blue");
                    }
                    else
                    {
                        $("#resultUn").html("Không hợp lệ");
                         $("#resultUn").css("color","red");
                    }
                });
            });
        });
    </script>
</head>
<body>  
    <div>
        <h1>DEMO 1</h1>
        <a href="demo1.php">Trang demo1</a>
        <div id="demo1">...</div>
    </div>
    <div id="main">
        <div class="main_left">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ycpj6x-b3Q0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="main_right">
            <input type="text" id="txtA"/>
            <input type="text" id="txtB"/>
            <input type="button" id="tinh" value="Tính"/>
            <h3 id="resultTinh"></h3>

            <table>
                <tr>
                    <td colspan="2">Đăng kí</td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" id="txtUn" name="txtUn"/>
                    <div id="resultUn"></div></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="txtPas" name="txtPas"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" id="btnDangKi" value="Đăng kí"/></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>