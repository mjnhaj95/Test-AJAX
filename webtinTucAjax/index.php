<?php
    require"dbCon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test ajax web tin tức</title>
    <style>
        .title{background-color:green; color:yellow; text-align:center; padding:5px}
        #menu a{display:block}
        .motTin{border-bottom:solid 1px blue; padding:10px}
        .tieude{color:red; font-weight:bold}
    </style>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
           $(document).ready(function(){
	             $(".loaitin").click(function(){
		         var id = $(this).attr("str");
		         $.get("xuly.php", {idLT:id}, function(data){
			         $("#ketqua").html(data);	
		        });
	        });	
        });
    </script>
</head>
<body>
    <table>
        <tr>
             <td width="20%" class="title">Loại tin</td>
             <td class="title">Tin</td>
             <td class="title">&nbsp;</td>
        </tr>
        <tr valign="top">
            <td id="menu">
                <?php
	                $qrLoaiTin = "SELECT * FROM loaitin";
                    $loaitin = mysql_query($qrLoaiTin);
                    while($row_loaitin = mysql_fetch_array($loaitin)){
	            ?>
            <div class="loaitin" str="<?php echo $row_loaitin["idLT"] ?>">
		        <?php echo $row_loaitin["Ten"] ?>
            </div>
            <?php } ?>
        </td>
            <td id="ketqua">
    	
            </td>
        </tr>
    </table>
</body>
</html>

