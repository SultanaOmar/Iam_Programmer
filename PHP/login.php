<?php
include('config.php');
if(!empty($_POST)){
	if(empty($_POST['email']) || empty($_POST['pass'])){
		$error = 'جميع الحقول مطلوبة';
	} else {
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$pass  = md5($_POST['pass']);
		$check = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
		if(@mysqli_num_rows($check) > 0){
			session_start();
			$_SESSION['name'] = mysqli_fetch_array($check)['name'];
			$_SESSION['user'] = $email;
			header('Location: dashboard.php');
		} else {
			$error = 'هناك خطأ في بيانات الدخول';
		}
	}
}
?>
<!DOCTYPE html>
 <html class="not-ie no-js">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Login | I'm a Programmer</title>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
		<script src="js/modernizr.js"></script>
		<script src="js/respond.js"></script>
	</head>
	<body>
	<style>
	input[type="password"], input[type="date"] {
		border: 0;
		font-family: 'Solomon Normal', sans-serif;
		background: #fdf1d1;
		border-radius: 4px;
		margin-bottom: 15px;
		width: 100%;
		color: #313131;
		padding: 10px 20px;
	}
	</style>
		<div class="container" id="wrapper">
			<header>
				<a href="index.php" class="logo">
					<img src="images/logo.png" alt="" />
				</a>
                            	<nav role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa">&#xf0c9;</span>
						</button>
					</div>
                                    
					<?php include ('nav.php'); ?>
					<div id="sun"></div>
				</nav>
				<div class="clearfix"></div>
			</header>

			<section dir="rtl" id="content" class="col-lg-7 col-md-8 col-sm-12">
				<div class="cloud">
					<h1>تسجيل الدخول</h1>
				</div>
				<div class="content-bg">
					<div class="separator"></div>
					<div id="note"></div>
					<?php
					if(isset($error)){
						echo '<font color="red" style="font-size:18px;">خطأ: '.$error.'</font><br /><br />';
					}
					?>
					<form class="w-clearfix" id="register" method="post" action="login.php">
						<div class="col-6">
							<input type="text" name="email" placeholder="البريد الإلكتروني" value="<?=@$_POST['email'];?>" />
							<input type="password" name="pass" placeholder="كملة المرور" />
						</div>
						<div class="col-12">
							<input class="button red" type="submit" value="  الدخول" />
						</div>
					</form>
					<div class="clearfix"></div>
				</div>

			</section>

		</div>
		
		<?php include('footer.php'); ?>
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
