
<!-- <div class="class">
    <ul class="class_menu">
        <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli ,$sql_danhmuc);
            while($row = mysqli_fetch_array($query_danhmuc)) {
        ?> 
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
        <?php
            }
        ?>
    </ul>
</div> -->
<div class="maincontent1">
        <?php
            if(isset($_GET['quanly'])){
                $tam1 = $_GET['quanly'];
            }else{
                $tam1 = '';
            }if($tam1=='giohang'){
                 include("sideion/tieude.php");
            }elseif($tam1=='tintuc'){
                include("sideion/tieudetintuc.php");
            }elseif($tam1=='lienhe'){
                include("sideion/thongtinlienhe.php");
            }elseif($tam1=='dangky'){
                include("sideion/dangky.php");
            }else{
                include("sideion/danhmucsp.php");
            }
        ?>
    </div>