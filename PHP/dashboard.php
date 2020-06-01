<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location: login.php');
	exit();
}
?>
<!DOCTYPE html>

<html class="not-ie no-js"> 
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Dashboard | I'm a Programmer</title>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
		<script src="js/modernizr.js"></script>
		<script src="js/respond.js"></script>
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
				<div class="clearfix"></div>
			</header>
		
			<section dir="rtl" id="content" class="col-lg-7 col-md-8 col-sm-12">

				<div class="cloud">
					<h1>أهلا بك يا <?=$_SESSION['name'];?></h1>
				</div>

				<div class="content-bg">
                                    
                                    <div class="col-lg-6 col-sm-12">
                                            <h2 class="entry-title"><a href="Description2.php">اللعبة الثانية</a></h2>
						<b style="color: #bababa;">متاح</b>
						<img src="images/G2.png" alt="" class="img-border" />
						<h4>بنهاية اللعبة ستكون متمكن من معرفه ماهي نقطه البداية بالجافا وكيفية استرجاع قيمة متغير وطباعته </h4>
                                                <a href="Description2.php" class="button blue">بدء اللعبة <span>&#xf137;</span></a>
                                                
					</div>
                                  
					<div class="col-lg-6 col-sm-12">
                                            <h2 class="entry-title"><a href="Description1.php">اللعبة الاولى</a></h2>
						<b style="color: #bababa;">متاح</b>
						<img src="images/G1.png" alt="" class="img-border" />
						<h4>بنهاية اللعبة ستكون قادر على إنشاء أول برنامج في جافا</h4>
                                                <a href="Description1.php" class="button blue">بدء اللعبة <span>&#xf137;</span></a>
                                                
					</div>
                                    
                                    	
        
					<div class="clearfix"></div>
                                        
                                        
                                         <div class="separator"></div>

					<div class="col-lg-6 col-sm-12">
                                            <h2 class="entry-title"><a href="Description3.php">اللعبة الثالثة</a></h2>
						<b style="color: #bababa;"> متاح</b>
						<img src="images/G3.png" alt="" class="img-border" />
						<h4>بعد الانتهاء من اللعبة ستكون مدرك لأهمية التعليقات بلغه الجافا مع القدرة على إعطاء المتغير قيمة  </h4>
                                                
                                                <a href="Description3.php" class="button blue">بدء اللعبة <span>&#xf137;</span></a>
					</div>
                                       
	
					<div class="clearfix"><br /></div>
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
