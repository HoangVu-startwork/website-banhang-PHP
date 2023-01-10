<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
    <style rel="stylesheet" type="text/css">
        #them {
            /* margin: 10px; */
            color: #CC0000;
            background: #DDDDDD;
            margin-left: 34%;
            text-align: center;
            font-weight: bold;
        }
        #tendanhmuc{
            width: 300px;
        }
        #thutu{
            width: 300px;
        }
        #chu{
            width: 200px;
            font-weight: bold;
            /* font-size: 23px; */
        }
        #themdanhmuc{
            margin-left: 30%;
        }
        #themdanhmuc:hover{
            background: #FFFF33;
        }
        #Chuthem{
            text-align: center;
            font-size: 20px;
            color: #663399;
        }
      </style>
<body>
<p id="Chuthem">Thêm danh mục sản phẩm</p>
<table id="them" border="2" width="auto" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
        <tr>
            <td id="chu">Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" id="tendanhmuc"></td>
        </tr>

        <tr>
            <td id="chu">Thứ tự</td>
            <td><input type="text" name="thutu" id="thutu"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="themdanhmuc" id="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
        </tr>
    </form>
</table>
</body>
</html>
