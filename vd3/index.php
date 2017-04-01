<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Vd3</title>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#Tinh").click(function(){
                var txta = $("#txtA").val();
                var txtb = $("#txtB").val();

                $.get("xuly.php",{a: txta, b: txtb},function(data){
                    $("#ketqua").html(data);
                });
            });
        });
    </script>
</head>
<body>
   <div>   
        <input type="text" id="txtA" name="txtA" /><br/>
        <input type="text" id="txtB" name="txtB" /><br/>
        <input type="button" id="Tinh" value="Gửi">
        <h2 id="ketqua"></h2>
   </div>
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HvbLH9swaqc" frameborder="0" allowfullscreen></iframe>
</body>
</html>