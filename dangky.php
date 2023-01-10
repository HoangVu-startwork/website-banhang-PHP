<?php
    include("admincp/config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dangky.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form autocomplete="off" action="" method="POST" role="from">
            <div class="user-details" >
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" name="username" >
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your Email" name="email">
                </div>
                <div class="input-box">
                    <span class="details">Địa chỉ</span>
                    <input type="text" placeholder="Enter your địa chỉ" name="diachi" >
                </div>
                <div class="input-box">
                    <span class="details">Phone</span>
                    <input type="text" placeholder="Enter your Phone" name="dienthoai">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your Password" name="password">
                </div>
                <div class="input-box">
                    <span class="details">Nhập lại Password</span>
                    <input type="password" placeholder="Enter your Password" name="password2">
                </div>
            </div>
                <!-- <?php
                if (isset($_GET['error'])) { 
                ?>
                <p class="error"><?php echo $_GET['error'] ?></p>
            <?php } ?> -->
            <div class="tuade">
                <?php
                    if(isset($_POST['dangky'])){
                        if(empty($_POST['username']) or empty($_POST['email']) or empty($_POST['diachi']) or empty($_POST['dienthoai']) 
                        or empty($_POST['password']) or empty($_POST['password2'])){
                            echo '<p> Vui long khong de trong</p>';
                        }else{
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $diachi = $_POST['diachi'];
                            $dienthoai = $_POST['dienthoai'];
                            $password = $_POST['password'];
                            $password2 = $_POST['password2'];
                            if(strlen($username) < 6 or strlen($password) < 6){
                                echo '<p">Username va Password phai nhieu hon 6 ky tu</p>';
                            }else{
                                if($password2 != $password){
                                    echo '<p>Password khong trung nhau</p>';
                                }else{
                                    $sql = "SELECT * FROM tbl_dangky where username='$username'";
                                    $query = mysqli_query($mysqli, $sql);
                                    $num = mysqli_num_rows($query);
                                    if($num == 0){
                                        $sql2 = "INSERT INTO tbl_dangky(username,email,diachi,dienthoai,password) VALUES ('$username','$email','$diachi','$dienthoai','$password')";
                                        $them = mysqli_query($mysqli, $sql2);
                                        if($them){
                                            echo '<p>Dang ky thanh cong</p>';
                                        }
                                        else{
                                            echo '<p>Them khong thanh cong</p>';
                                        }
                                    }else{
                                        echo '<p>Ten da ton tai</p>';
                                    }
                                }
                            }
                        }
                    }
                ?>
            </div>
            <div class="button">
                <input type="submit" value="Register" name="dangky">
            </div>
            <div class="dangnhap">
                <input type="submit" value="Dang nhap" name="dangnhap">
                <?php
                    if(isset($_POST['dangnhap'])){
                        header("Location: dangnhap.php");
                            exit();
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>