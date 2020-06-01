<!DOCTYPE html>
 <html class="not-ie no-js">  
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Game #1 | I'm a Programmer</title>
		<link rel="shortcut icon" href="favicon.ico">

		
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">

		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
		
		<link href="css.css" type="text/css" rel="stylesheet">

		<script src="js/interact.min.js"></script>
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

			<!-- header -->
			<header>
				<a href="index.php" class="logo">
					<img src="images/logo.png" alt="" />
				</a>
				<nav role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
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
			<!-- end header -->

			
			
			<div id="viewer">
				<section dir="rtl" id="content" class="col-lg-7">
					<div class="cloud">
						<h1>ب</h1>
					</div>

					<div class="content-bg">
						<h2 class="entry-title">هنا ستحول المربع إما للأحمر أو للأخضر بحسب إجابتك من أ</h2>
						<br />
						<div id="X" align="center">
							<div id="1" class="drag-drop-box">static</div><br />
							<br />
							<div id="2" class="drag-drop-box">public</div><br />
							<br />
							<div id="3" class="drag-drop-box">void</div><br />
							<br />
							<div id="4" class="drag-drop-box">( )main</div><br />
							<br />
						</div>
					</div>
				</section>
			</div>
			<section dir="rtl" id="content" class="col-lg-7">
				<div class="cloud2">
					<h1><span id="title">أ</span></h1>
				</div>

				<div class="content-bg" style="background: #99c6df;">
					<div id="desc">
                                            <h2 class="entry-title"> هيا فلنبدأ بإنشاء نقطة البداية....</br>
                                             <br/>من هنا بأمكانك إختيار الإجابة بحسب ترتيبها الصحيح

</h2>
						<br />
						<div id="X" align="center">
							<a id="1-" href="javascript:;" onclick="send(1);"><div class="drag-drop-box white">static</div></a><br />
							<br />
							<a id="2-" href="javascript:;" onclick="send(2);"><div class="drag-drop-box white">public</div></a><br />
							<br />
							<a id="3-" href="javascript:;" onclick="send(3);"><div class="drag-drop-box white">void</div></a><br />
							<br />
							<a id="4-" href="javascript:;" onclick="send(4);"><div class="drag-drop-box white">( )main</div></a><br />
							<br />
						</div>
					</div>
					
					<div id="buttons">
						<a href="dashboard.php" class="button green pull-right"><span>&#xf138;</span> العودة للوحة التحكم</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
			
			<div class="clearfix"></div>
		</div>
		

		<?php include('footer.php'); ?>

		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js.js"></script>
		<script>
		let i = 1;
		function send(n) {
			var div = document.getElementById(n);		
			if(n == 1) {
				if(i == 2) {
					div.style.backgroundColor = 'green';
					document.getElementById(n+'-').removeAttribute("onclick");
					i = 3;
				} else {
					div.style.backgroundColor = 'red';
				}
			} else if(n == 2) {
				if(i == 1) {
					div.style.backgroundColor = 'green';
					document.getElementById(n+'-').removeAttribute("onclick");
					i = 2;
				} else {
					div.style.backgroundColor = 'red';
				}
			} else if(n == 3) {
				if(i == 3) {
					div.style.backgroundColor = 'green';
					document.getElementById(n+'-').removeAttribute("onclick");
					i = 4;
				} else {
					div.style.backgroundColor = 'red';
				}
			} else if(n == 4) {
				if(i == 4) {
					div.style.backgroundColor = 'green';
					document.getElementById(n+'-').removeAttribute("onclick");
					//alert('right');
					document.getElementById('viewer').remove();
					document.getElementById('desc').innerHTML = '<br /><h2 style="color:red">أحسنت .....إجابتك صحيحة<br /></br> ( ) public static void main</br><br />بإمكانك المتابعة للمرحلة التالية</h2><br />';
					document.getElementById('buttons').innerHTML += '<a href="game.php?l=2&g=2" class="button green pull-left"><span>&#xf137;</span> التالي</a>';
					document.getElementById("title").innerHTML = "مبروووك";

				} else {
					div.style.backgroundColor = 'red';
				}
			}
		}
		</script>
	</body>
</html>
