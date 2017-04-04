<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        var toancuc = 0;
        $(document).ready(function(){
           $("#xemthem").click(function(){
               toancuc = toancuc + 1;
                $.get("xuly.php",{trang: toancuc},function(data){
                    $("#danhsach").append(data);
                });
           });
        });
    </script>
</head>
<body>
    <div id="danhsach"></div>
    <div id="xemthem">Xem thêm</div>
</body>
</html>