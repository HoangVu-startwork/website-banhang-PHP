<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        // header('Location: index.php');
    }
?>

<p><a href="index.php?dangxuat=1">Đăng xuất: </a><?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    } ?></p>