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
        width: 190px;
    }
    img{
        width: 190px;
    }
    .tomtat{
        width: 300px;
    }
    .td{
        text-align: center;
    }
</style>
<body>
<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
    <p>Liệt kê danh mục sản phẩm</p>
    <table style="width: 100%;" border="1" style="border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Danh mục</th>
            <th>Mã sản phẩm</th>
            <th class="tomtat">Tóm tắt</th>
            <th>Trạng thái</th>
            <th>Quản lý</th>
        </tr>

        <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_sp)) {
                $i++;
        ?>
        <tr class="td">
             <td><?php echo $i ?></td>
             <td><?php echo $row['tensanpham'] ?></td>          
             <td class="hinhanh"><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><?php echo $row['soluong']?></td>
            <td><?php echo $row['tendanhmuc']?></td>
            <td><?php echo $row['masp'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php if($row['tinhtrang'] ==1){
                echo 'Kích hoạt';
            }else{
                echo 'Ẩn';
            }
             ?>
             </td>
             <td>
                <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>"><input id="nut" type="submit" value="Xóa"></a> | <a href="
                    ?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><input id="nut" type="submit" value="Sửa"></a>
            </td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>
