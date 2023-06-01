<?php 
//Start Session
session_start();
//Config File
require 'conf/config.php';
//Database Class
require 'classes/database.php';

$database = new Database;

//Set Timezone
date_default_timezone_set('America/New_York');
?>

<?php
  //LOG IN
if($_POST['login_submit']){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$enc_password = md5($password);

	$database = new Database;
    //Query
	$database->query("SELECT * FROM users WHERE username = :username AND password = :password");
	$database->bind(':username',$username);
	$database->bind(':password',$enc_password);
	$rows = $database->resultset();
	$count = count($rows);
	if($count > 0){
		session_start();
      //Assign session variables
		$_SESSION['username']   = $username;
		$_SESSION['password']   = $password;
		$_SESSION['logged_in']  = 1;

		header('Location:include/dashboard/index.php');
	} else {
		$login_msg[] = 'Sorry, <strong style = "color:red">Invalid</strong> Admin Credentials!' . "<br>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<!--FORM-->
				<form class="login100-form validate-form" action= "<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<span class="login100-form-title p-b-49">
						Admin Login
					</span>
					
					<?php 
					foreach($login_msg as $msg){
						echo '<div class="alert alert-danger" role="alert">
						<p class="error"> ' . $msg . '</p>
						</div>';

					} 
					?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" value="" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="" data-toggle="modal" data-target="#myModal">
							Forgotten password?
						</a>
					</div>

					<input style="margin-top:50px;font-weight: bold;margin-left: 20px;background-color: #4CAF50;font-size: 20px;padding: 12px 140px;color: white;border-radius: 15px" type="submit" value="Login" name="login_submit" />


					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- modal triggered -->
	<?php
	include 'pages/pswdRecoveryModal.php';
	?>
</body>
</html>