<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/dangnhap.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="hinhcung/wave.png">
	<div class="container">
		<div class="img">
			<img src="hinhcung/bg.svg">
		</div>
		<div class="login-content">
			<form action="dangnhapc.php" method="POST">
				<img src="hinhcung/avatar.svg">
				<h2 class="title">Welcome</h2>
				<?php
            		if (isset($_GET['error'])) { 
        		?>
            		<p class="error"><?php echo $_GET['error'] ?></p>
        		<?php } ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<!-- <input type="submit" class="btn" value="Login"> -->
				<button type="submit" name="dangnhap" class="btn">Đăng Nhập </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/dangnhap.js"></script>
</body>
</html>
