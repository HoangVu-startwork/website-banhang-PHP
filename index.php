<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="css/sty.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=My+Soul&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Web phụ kiện điện thoại</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        // header('Location:login.php');
    }
?> 
    <div class="wrapper">
        <?php
            include("admincp/config/config.php");
            include("pages/menu.php");
            include("pages/header.php");
            include("pages/sidesion.php");
            include("pages/main.php");
            include("pages/footer.php");
            include("pages/giaodien.php");
        ?> 
    </div>
    <li id="backtop" ><a href="index.php?quanly=lienhe">
                    <i class="fas fa-user-circle">
                    <p><?php if(isset($_SESSION['dangnhap'])){
                    echo $_SESSION['dangnhap'];
                    } ?></p></i>
                    </a></li>
    <script src="js/index.js"></script>
</body>
</html>