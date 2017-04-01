<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Vd4</title>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#txtUn").blur(function(){
                var u = $(this).val();
                $.get("checkUsername.php",{un: u},function(data){
                    if(data ==0){
                        $("#nhacLoiUn").html("Hợp lệ");
                        $("#nhacLoiUn").css("color","blue");
                    }
                    else{
                        $("#nhacLoiUn").html("Không hợp lệ");
                         $("#nhacLoiUn").css("color","red");
                    }
                })
            })
        });
    </script>
</head>
<body>
    <table>
        <tr>
            <td colspan="2" align="center">Đăng kí thành viên</td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" id="txtUn" name="txtUn"/>
            <div id="nhacLoiUn"></div>
            </td>
            
        </tr>
         <tr>
            <td>Password</td>
            <td><input type="text" id="txtPass" name="txtpass"/></td>
        </tr>
         <tr>
            <td></td>
            <td><input type="button" value="Đăng ký"/></td>
        </tr>
    </table>
</body>
</html>