<?php
    session_start();
    include('admincp/config/config.php');
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['dangnhap'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)){
            header("Location: dangnhap.php?error=Username Name is required");
            exit();
        }else if(empty($password)){
            header("Location: dangnhap.php?error=Password Name is required");
            exit();
        }else{
            $sql = "SELECT * FROM tbl_dangky WHERE username='$username' AND password='$password'";

            $result = mysqli_query($mysqli, $sql);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $password){
                    $_SESSION['dangnhap'] = $username;
                    header("Location: index.php");
                    exit();
                }else{
                    header("Location: dangnhap.php?error=Incorect User name or password and email");
                exit();
                }
            }else{
                header("Location: dangnhap.php?error=Incorect User name or password and email");
                exit();
            }
        }
    }else{
        header("Location: index.php");
        exit();
    } 
?>