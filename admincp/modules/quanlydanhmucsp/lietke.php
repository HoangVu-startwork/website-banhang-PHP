<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        th{
            text-align: center;
            font-weight: bold;
            color: #99FF66;
        }
        #suaban{
            text-align: center;
        }
        #suaban{
            background: #888888;
            margin-left: 5%;
        }
        #QL{
            width: 300px;
            font-size: 19px;
        }
        #ID{
            width: 200px;
            font-size: 19px;
        }
        #SP{
            color: White;
            font-size: 18px;
        }
        #TDM{
            font-size: 19px;
        }
        #nut{
            width: 70px;
        }
        #nut:hover{
            background: #CCFF00;
        }
    </style>
<body>
    <?php
        $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
        $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
    ?>
    <p id="Chuthem">Liệt kê danh mục sản phẩm</p>
    <table style="width: 90%" border="2" style="border-collapse: collapse;" id="suaban">
        <tr>
            <th id="ID">Id</th>
            <th id="TDM">Tên danh mục</th>
            <th id="QL">Quản lý</th>
        </tr>
        <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                $i++;
        ?>
        <tr id="SP">
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><input id="nut" type="submit" value="Xóa"></a> | <a href="
                    ?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><input id="nut" type="submit" value="Sửa"></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>