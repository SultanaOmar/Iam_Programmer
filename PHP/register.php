<?php
include('config.php');
if(!empty($_POST)){
	function getAge($date){
		return intval(date('Y', time() - strtotime($date))) - 1970;
	}
	if(empty($_POST['birthdate']))
	{
		$error = 'يرجى تعبئة الحقول';
	} elseif(!((8 <= getAge($_POST['birthdate']) ) && (getAge($_POST['birthdate']) <= 14)))
	{
		$error = 'يجب أن يكون عمر الطفل من 8 سنوات إلى 14 سنة';
	} elseif(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pass']) ||  empty($_POST['confirm_pass']))
	{
		$error = 'جميع الحقول مطلوبة';
	} elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$error = 'البريد الإلكتروني غير صحيح';
	} elseif($_POST['pass'] != $_POST['confirm_pass'])
	{
		$error = 'كلمة المرور لا تطابق تأكيد كلمة المرور';
	} else
	{
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$check = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '$email'");
		if(@mysqli_num_rows($check) > 0){
			$error = 'هذا البريد مسجل بالفعل مسبقا';
		} else {
			$done      = true;
			$name      = mysqli_real_escape_string($con, $_POST['name']);
			$pass      = md5($_POST['pass']);
			$birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
			
			mysqli_query($con, "INSERT INTO `users` (`id`, `name`, `email`, `birthdate`, `pass`)
			VALUES (NULL, '$name', '$email', '$birthdate', '$pass')");
			
			session_start();
			$_SESSION['name'] = $name;
			$_SESSION['user'] = $email;
			header("Refresh:5; url=dashboard.php");
		}
	}
}
?>
<!DOCTYPE html>
 <html class="not-ie no-js">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Register | I'm a Programmer</title>
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
					<h1>تسجيل مستخدم جديد</h1>
				</div>

				<div class="content-bg">
					<div class="separator"></div>
					<div id="note"></div>
					<?php
					if(isset($error)){
						echo '<font color="red" style="font-size:18px;">خطأ: '.$error.'</font><br /><br />';
					}
					if(isset($done)) { ?>
						<p style="color:#ee3131; font-size:18px;"><br />تم بنجاح تسجيل اشتراكك في الموقع
						<br /><br /><br />جاري إعادة توجيهك لداخل الموقع...
						</p>
					<?php
					} else { ?>
					<form class="w-clearfix" id="register" method="post" action="register.php">
						<div class="col-6">
							<input type="text" name="name" placeholder="الاسم" value="<?=@$_POST['name'];?>" />
							<input type="text" name="email" placeholder="البريد الإلكتروني" value="<?=@$_POST['email'];?>" />
							<input type="date" name="birthdate" placeholder="تاريخ الميلاد" value="<?=@$_POST['birthdate'];?>" />
							<input type="password" name="pass" placeholder="كملة المرور" />
							<input type="password" name="confirm_pass" placeholder="تاكيد كملة المرور" />
						</div>
						<div class="col-12">
							<input class="button red" type="submit" value="  التسجيل" />
						</div>
					</form>
					<?php } ?>
					<div class="clearfix"></div>
				</div>

			</section>
			<div class="clearfix"></div>
		</div>
	

		<?php include('footer.php'); ?>
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
