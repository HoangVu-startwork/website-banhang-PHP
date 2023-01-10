<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql_sua_qc = "SELECT * FROM tbl_quancao WHERE id='$_GET[id]' LIMIT 1";
        $query_sua_qc = mysqli_query($mysqli, $sql_sua_qc);
    ?>
    <p>Sửa sản phẩm</p>
    <table border="3" width="50%" style="border-collapse: collapse;" class="SP">
    <?php
        while($row = mysqli_fetch_array($query_sua_qc)){
    ?>
        <form method="POST" action="modules/quanlyquancao/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
            <tr>
                <td class="chu">Tên quản cáo</td>
                <td><input type="text" value="<?php echo $row['ten'] ?>" class="ten" name="ten"></td>
            </tr>
            <tr>
                <td class="chu">Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh" class="hinhanh">
                    <img src="modules/quanlyquancao/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
                    <input type="text" name="hinhanh2" value="<?php echo $row['hinhanh'] ?>">
                </td>
            </tr>
            <tr>
                <td class="chu">Camera</td>
                <td><input type="text" value="<?php echo $row['camera'] ?>" name="camera" class="camera"></td>
            </tr>
            <tr>
                <td class="chu">Processor</td>
                <td><input type="text" value="<?php echo $row['processor'] ?>" name="processor" class="processor"></td>
            </tr>
            <tr>
                <td class="chu">Display</td>
                <td><input type="text" value="<?php echo $row['display'] ?>" name="display" class="display"></td>
            </tr>
            <tr>
                <td class="chu">Battery Life</td>
                <td><input type="text" value="<?php echo $row['pin'] ?>" name="pin" class="pin"></td>
            </tr>
            <tr>
                <td colspan="2" class="from"><input class="suaquancao" type="submit" name="suaquancao" value="Sửa sản phẩm"></td>
            </tr>
        </form>
    <?php
        }
    ?>
    </table>
</body>
</html>