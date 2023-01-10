<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <form action="loginc.php" method="POST">
        <h2>LOGIN</h2>
        <?php
            if (isset($_GET['error'])) { 
        ?>
            <p class="error"><?php echo $_GET['error'] ?></p>
        <?php } ?>
        <div class="data">
            <label>Tài Khoản</label>
            <input type="text" name="username">
        </div>
        <div class="data">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="data">
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <button type="submit" name="dangnhap">Login</button>
    </form>
</body>
</html>