<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .hinhanh{
        width: 140px;
       
    }
    img{
        width: 140px;
        height: 250px;
    }
    table{
        text-align: center;
    }
</style>
<body>
<?php
    $sql_lietke_qc = "SELECT * FROM tbl_quancao ";
    $query_lietke_qc = mysqli_query($mysqli, $sql_lietke_qc);
?>
    <table style="width: 100%;" border="1" style="border-collapse: collapse;" >
        <tr>
            <th>ID</th>
            <th>Tên quản cáo</th>
            <th>Hình ảnh</th>
            <th>Camera</th>
            <th>Processor</th>
            <th>Display</th>
            <th>Battery Life</th>
            <th>Quản lý</th>
        </tr>
        <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_qc)) {
                $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['ten'] ?></td> 
                <td class="hinhanh"><img src="modules/quanlyquancao/uploads/<?php echo $row['hinhanh'] ?>"></td>
                <td><?php echo $row['camera'] ?></td> 
                <td><?php echo $row['processor'] ?></td> 
                <td><?php echo $row['display'] ?></td> 
                <td><?php echo $row['pin'] ?></td> 
                <td>
                <a href="?action=quanlydanhmucquancao&query=sua&id=<?php echo $row['id'] ?>"><input id="nut" type="submit" value="Sửa"></a>
            </td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>