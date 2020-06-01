<!DOCTYPE html>
<html class="not-ie no-js"> 
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Game #1 | I'm a Programmer</title>

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
                        <section dir="rtl" id="content" class="col-lg-7">
                            <div class="cloud2">
                                <h1><span id="title">شرح مبسط عن اللعبة الثالثة </br>مرحبا بك </span></h1>
                            </div>
                            <div class="content-bg" style="background: #99c6df;">
					<div id="desc">
                                            <h2 class="entry-title">موقع أنا مبرمج يساعدك على تعلم بعض من المصطلحات والدوال في لغة الجافا<br/>
                                                لغة الجافا: تعتبر من اللغات الحديثة في لغة البرمجة، والغرض منها برمجة صفحات الأنترنت.</br>-
                                            في اللعبة الثاالثة من موقع أنا مبرمج تتعلم خلالها  عن كتابة  comments  أو الملاحظات  في لغة الجافا وهي مهمة جدا وتساعد المبرمج على تذكر كل رمز أو وظيفة  وتساعد المبرمجين الاخرين على فهم افضل للبرنامج وهي كذلك مهمة للمبتدئين, وكتابة comments   يكون لها عدة رموز منها هذا الرمز:</br>
                                      /* كتابة المحتوى هنا  */ </br>-
                                      وتتعلم في هذه اللعبة أيضا عن المتغيرات في البرمجة وهي  عبارة عن حاوية للقيم. فيها يتم تخزين أي قيمة ( معلومة ) يتم ادخالها من قبل المستخدم: مثال (x)</br>-
                                      في لغة الجافا لكل متغير نوع معين مثلا (double ;int  ;long  )عند تعريف المتغير يتم وضع نوعه قبل اسم المتغير</br>-
                                      ولتهيئة المتغير نعطيه قيمة بدئية, وذلك عن طريق وضع اسم المتغير على اليسار ومن ثم تضع علامة (=) و من ثم تضع القيمة المراد استخدامها على يمين علامة الـ (=)</br>-
                                      مثال:  ;int X= 7</br>
                                      
                                            
                                            </h2>
                                            </br>
                                              <a href="game.php?l=3&g=1" class="button green pull-left">بدء اللعبة <span>&#xf137;</span></a>
                                              <div id="buttons">
						<a href="dashboard.php" class="button green pull-right"><span>&#xf138;</span> العودة للوحة التحكم </a>
					</div>
                        </section>
                        
                    
                    
					</div>
                                 <?php include('footer.php'); ?>

		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js.js"></script>
		<script>

            
        </body>
</html>



