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

			<!-- page content area -->
			
			<div id="viewer">
				<section dir="rtl" id="content" class="col-lg-7">
					<div class="cloud">
						<h1>ب</h1>
					</div>

					<div class="content-bg">
						<h2 class="entry-title">أكتب الكود الذي ينفذ الأمر التالي:</h2>
						<br />
						<div id="X" align="center">
							<div id="1" class="drag-drop-box">طباعة قيمة المتغير الذي اسمه:<br />var</div><br />
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
                                            <h2 class="entry-title"> الان ابدأ بطباعة قيمة المتغير باستخدام دالة الطباعة:</br></br>جهة الكتابة: أكمل الكود التالي للإخراج المطلوب في القائمة ب
                                                
                                                </h2>
						<br />
						<h4 style="text-align:left">
							<font id="X" size="4" dir="ltr">
							public class HelloWorld { <br />
							&nbsp;&nbsp;&nbsp;&nbsp; public static void main(String[] args) { <br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; String var = "hi";
								<textarea type="text-box" id="ans"></textarea>
							&nbsp;&nbsp;&nbsp;&nbsp; } <br />
							} <br />
							</font>
						</h4>
					</div>
					
					<div id="buttons">
						<a href="dashboard.php" class="button green pull-right"><span>&#xf138;</span> العودة للوحة التحكم</a>
						<a id="send" href="javascript:;" onclick="send();" class="button green pull-left"><span>&#xf137;</span> إرسال الإجابة</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
			
			<!-- end page content area -->

			<div class="clearfix"></div>
		</div>
	

		<?php include('footer.php'); ?>

		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js.js"></script>
		<script>
		function send() {
			var ans = document.getElementById('ans').value;
			var res = ans.toLowerCase();
			var r_ans = 'system.out.println(var);';
			
			if(res.indexOf(r_ans) !== -1) {
				document.getElementById('send').remove();
				document.getElementById('viewer').remove();
				document.getElementById('desc').innerHTML = '<br /><h2 style="color:red">أبدعت أيها المبرمج الصغير....<br /></br>;(system.out.println(var </br><br />بإمكانك المتابعة للمرحلة التالية</h2><br />';
				document.getElementById('buttons').innerHTML += '<a href="Description3.php" class="button green pull-left"><span>&#xf137;</span> التالي</a>';
				document.getElementById("title").innerHTML = "مبروووك";
			} else {
				alert("حاول مرة أخرى");
			}
		}
		</script>
	</body>
</html>
