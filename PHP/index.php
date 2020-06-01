<!DOCTYPE html>
<html class="not-ie no-js">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Home | I'm a Programmer</title>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
		<script src="js/modernizr.js"></script>
		<script src="js/respond.js"></script>
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
		
			<section id="featured">
				<div id="wowslider-container1" style="text-align:right;" dir="rtl">
					<div class="ws_images">
						<ul>
							<li><img src="images/wowslider/01.png" alt="موقع أنا مبرمج :)" title="موقع أنا مبرمج :)" id="wows1_0"/>هو موقع مصمم خصيصاً للأطفال حتى يزيد من معرفتهم<br />وتحبيبهم في البرمجة بشكل ألعاب بسيطة وممتعه</li>
							<li><img src="images/wowslider/02.png" alt="البرمجة شيء ممتع" title="البرمجة شيء ممتع" id="wows1_1"/>وتعلمها يتيح لك فهم الكثير من الأشياء</li>
							<li><img src="images/wowslider/03.png" alt="أنا مبرمج!" title="أنا مبرمج!" id="wows1_2"/>تعلم البرمجة من بيتك</li>
						</ul>
					</div>
					<div class="ws_bullets">
						<div>
							<a href="#" title="موقع أنا مبرمج :)">1</a>
							<a href="#" title="البرمجة شيء ممتع">2</a>
							<a href="#" title="أنا مبرمج!">3</a>
						</div>
					</div>
				</div>
			</section>
			<section id="content-homepage" style="text-align:right;direction:rtl;">

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<div id="col-green">
						<h2> كيف أستطيع البدء؟ </h2>
						<img src="images/04.png" alt="" class="img-margin" />
						<h4>عليك انشاء حساب جديد ثم البدء باللعب والتعلم سويا من خلال ألعاب بسيطة.</h4>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-xs-12">
					<div id="col-yellow">
						<div id="butterfly"></div>
						<h2>هدفنا</h2>
						<img src="images/wowslider/03.png" alt="" class="img-margin" />
						<h4>ان يصبح كل الاطفال لديهم المعرفة بأساسيات البرمجة ويستطيعون بعدها الاستمرار في تعلم لغة البرمجة 
						انشاء جيل من المبرمجين منذ الصغر. </h4>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-xs-12">
					<div id="col-orange">
						<h2>عنا </h2>
                                               <img src="images/wowslider/01.png" alt="" class="img-margin" />
						<h4 style="text-align:right;direction:rtl;">هل تريد ان تتعلم لغة البرمجة بطريقة ممتعه؟!<br />
						هل ترغب في ان تكون مبرمج منذ الصغر؟!<br />
						هنا لدينا كل ما تحتاجه لتحقق ذلك..<br /><br />
												</h4>
						<a href="about.php" class="button blue"><span>&#xf138;</span> قراءة المزيد</a>
						<div class="clearfix"><br /></div>
					</div>
                                    
				</div>

			</section>
			<div class="clearfix"></div>
		</div>
		
		<?php include('footer.php'); ?>
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/wowslider.js"></script>
		<script src="js/wowtransition.js"></script>
	</body>

</html>
