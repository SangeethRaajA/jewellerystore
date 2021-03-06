<?php include('server/server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="page-limiter">
		<div class="container-login" style="background-image: url('images/4.jpg');">
			<div class="wrap-login m-l-0 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="login.php" method="post"> class="login-form validate-form" 
                <?php include('error-msg/errors.php'); ?>    
                <span class="login-form-title p-b-49">
						Login
					</span>
					<?php include('app_logic.php'); ?>
                    
					<div class="wrap-input validate-input ">
						<span class="label-input">Email</span>
						<input class="input" type="email" name="email" placeholder="Type your email"  required>
           
						<span class="focus-input" ></span>
					</div>

					<div class="wrap-input validate-input" >
						<span class="label-input">Password</span>
						<input class="input" type="password" name="password" placeholder="Type your password" >
						<span class="focus-input" ></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="enter_email.php" style="text-decoration: none">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button class="login-form-btn" name='login_user'>
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


	<script src="js/main.js"></script>

</body>
</html>