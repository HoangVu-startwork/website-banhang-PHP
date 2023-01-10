<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
    <style rel="stylesheet" type="text/css">
        #sua {
            margin: 10px;
            color: #CC0000;
            background: #9999FF;
        }
        #tendanhmuc1{
            width: 300px;
        }
        #thutu1{
            width: 300px;
        }
        #chu1{
            width: 200px;
        }
        #suadanhmuc{
            margin-left: 30%;
        }
      </style>
<body>
    <?php
        $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
        $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
    ?>
<p>Thêm danh mục sản phẩm</p>
<table id="sua" border="2" width="auto" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
        ?>
        <tr>
            <td id="chu">Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" id="tendanhmuc1"></td>
        </tr>

        <tr>
            <td id="chu">Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu" id="thutu1"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" id="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
        <?php
        }
        ?>
    </form>
</table>
</body>
</html>