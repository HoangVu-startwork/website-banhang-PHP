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
        $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
    ?>
    <p>Sửa sản phẩm</p>
    <table border="3" width="50%" style="border-collapse: collapse;" class="SP">
    <?php
        while($row = mysqli_fetch_array($query_sua_sp)){
    ?>
        <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
            <tr>
                <td class="chu">Tên sản phẩm</td>
                <td><input type="text" value="<?php echo $row['tensanpham'] ?>" class="tensanpham" name="tensanpham"></td>
            </tr>
            <tr>
                <td class="chu">Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp" class="masp"></td>
            </tr>
            <tr>
                <td class="chu">Giá sản phẩm</td>
                <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp" class="giasp"></td>
            </tr>
            <tr>
                <td class="chu">Số lượng</td>
                <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" class="soluong"></td>
            </tr>
            <tr>
                <td class="chu">Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh" class="hinhanh">
                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
                    <input type="text" name="hinhanh2" value="<?php echo $row['hinhanh'] ?>">
                </td>
            </tr>
            <tr>
                <td class="chu">Tóm tắt</td>
                <td><textarea rows="5" cols="62" name="tomtat" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
            </tr>
            <tr>
                <td class="chu">Nội dung</td>
                <td><textarea rows="5" cols="62" name="noidung" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
            </tr>
            <tr>
                <td class="chu">Danh mục sản phẩm</td>
                <td>
                    <select class="tinhtrang" name="danhmuc">
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                    if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                                ?>
                            <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php
                            }else{
                            ?>
                            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php
                                }
                            }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="chu">Tình trạng</td>
                <td>
                    <select class="tinhtrang" name="tinhtrang">
                        <?php
                            if($row['tinhtrang']==1){
                        ?>
                        <option value="1" selected>Kính hoạt</option>
                        <option value="0">Ấn</option>
                        <?php
                            }else{
                        ?>
                        <option value="1" selected>Kính hoạt</option>
                        <option value="0">Ấn</option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="from"><input class="suasanpham" type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </form>
    <?php
        }
    ?>
    </table>
</body>
</html>
