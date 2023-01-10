<?php
       include('../../config/config.php');

       $ten = $_POST['ten'];
       $camera = $_POST['camera'];
       $processor = $_POST['processor'];
       $display = $_POST['display'];
        // xuly hình ảnh
       $hinhanh = $_FILES['hinhanh']['name'];
       $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
       $hinhanh1 = time().'_'.$hinhanh;
       // 
       $pin = $_POST['pin'];
       $hinhanh2 = $_POST['hinhanh2'];


       if(isset($_POST['suaquancao'])){
              if($hinhanh != ''){
                     move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh1);
         
                     $sql_update = "UPDATE tbl_quancao SET ten='".$ten."',hinhanh='".$hinhanh1."',camera='".$camera."',processor='".$processor.
                     "',display='".$display."',pin='".$pin."' WHERE id='$_GET[id]'";
                     // Xoa hinh anh củ
                     $sql = "SELECT * FROM tbl_quancao WHERE id = '$_GET[id]' LIMIT 1";
                     $query = mysqli_query($mysqli, $sql);
                     while($row = mysqli_fetch_array($query)){
                         unlink('uploads/'.$row['hinhanh']);
                     }
                 }
                 else{
                     $sql_update = "UPDATE tbl_quancao SET ten='".$ten."', camera='".$camera."',processor='".$processor."',display='".$display.
                     "',pin='".$pin."' WHERE id='$_GET[id]'";
                 }
                 mysqli_query($mysqli, $sql_update);
                 header('Location:../../index.php?action=quanlyquancao&query=them');
       }
?>