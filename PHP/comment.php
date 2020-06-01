<?php
session_start();
include('config.php');
if(!empty($_POST)){
	if(empty($_POST['msg'])) {
		$show_msg = 'خطأ: يرجى كتابة تعليق لإرساله';
	} else {
		$msg = mysqli_real_escape_string($con, $_POST['msg']);
		mysqli_query($con, "INSERT INTO `comments` (`id`, `username`, `comment`) VALUES (NULL, '".$_SESSION['name']."', '$msg')");
		$show_msg = 'تم إرسال التعليق بنجاح';
	}
}
?>
<!DOCTYPE html>
 <html class="not-ie no-js">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Comments | I'm a Programmer</title>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css.css" type="text/css" rel="stylesheet">
		<style>
		.drag-drop-box {
			display: inline-block;
			min-width: 40px;
			padding: 2em 0.5em;

			color: #fff;
			background-color: #29e;
			border: solid 2px #fff;
			width: 45%;
		}
		.white {
			color: black;
			background-color: #fff;
		}
		</style>
	</head>
	<body>
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
				
			</header>
		
			<section dir="rtl" id="content" class="col-lg-7">
				<div class="cloud2">
					<h1><span id="title">تعليقات</span></h1>
				</div>

				<div class="content-bg" style="background: #99c6df;">
				<?php
				if(isset($show_msg)){
					echo '<font color="red" style="font-size:18px;">'.$show_msg.'</font><br /><br />';
				}
				?>
				<form id="comment" method="post" action="comment.php">
					<textarea type="text-box" name="msg"></textarea>
					<input class="button red" type="submit" value=" إرسال التعليق" />
				</form>
				</div>
			</section>
		

	
		</div>
	
		<?php include('footer.php'); ?>
	
	</body>
</html>
