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
                                <h1><span id="title">شرح مبسط عن اللعبة الثانية </br> مرحبا بك</span></h1>
                            </div>
                            <div class="content-bg" style="background: #99c6df;">
					<div id="desc">
                                            <h2 class="entry-title">موقع أنا مبرمج يساعدك على تعلم بعض من المصطلحات والدوال في لغة الجافا</br>لغة الجافا: تم تطويرها لبناء تطبيقات للويب، السيرفرات، سطح المكتب، الهواتف والروبوتات وهي  تعمل على جميع أنظمة التشغيل مثل Windows, Mac OS, Linux, Unix, Android إلخ.. وتعتبر  من أشهر لغات البرمجة على الإطلاق</br>
                                                في اللعبة الثانية من موقع أنا مبرمج تتعلم خلالها  عن نقطة البداية في لغة  الجافا هي الدالة (public static void main(String[] args. وهي بمعنى:</br>-
                                                - public : معنى كلمة public هو أنه يمكن استدعاء الكلاس من أي مكان على المشروع، وفي وسط كلاسات أخرى، ولكي يتم الوصول إليها من خارج هذه الكلاس.  </br>-
                                                - static : لأنه يتم استدعاؤها مباشرةً وبدون إنشاء كائن منها</br>-
                                                - void : لأنها لا تحمل أي قيمة رجعية</br>-
                                                - main : وهو اسم الوظيفة ( هو الوظيفة الرئيسية main )</br>-
                                                - String[] args : عبارة عن مصفوفة Array، تأخد قيم إدخال من المستخدم.   </br>-
                                                و لذلك عند إنشاء أي برنامج  جديد تجد هذه الدالة جاهزة فيه. في الجافا يجب أن يحتوي كل برنامج على الدالة main() لأنها نقطة البداية</br>-
                                                و في لغة الجافا هناك نوعان من الدوال :
                                                1-دوال جاهزة يمكن أن توفرها لغة الجافا</br>-
                                                2-دوال يمكن تعريفها عن طريق المستخدم.</br>-
                                                من الدوال التي يتم تعريفها عن طريق المستخدم نوع يعود بقيمة . وفي هذا النوع لابد من استخدام العبارة return وكمثال على الدالة التي تعود بقيمة:</br>-
                                               ( ) public int getDay</br>
                                                { ;return  x  }</br>
                                                هنا نرى أن الدالة المعرفة تعود  ب X وهو قيمة ولذلك تم وضع عبارة .return</br>-
                                                وتتعلم أيضا في هذه اللعبه عن المتغيرات في البرمجة وهو عبارة عن حاوية للقيم. فيها يتم تخزين أي قيمة ( معلومة) يتم ادخالها من قبل المستخدم: (var)</br>-
                                                وكل متغير يكون له نوع مثلا: (string)</br>-
                                                تهيئة المتغيرات هي الطريقة لحجز قيمة بدائية للمتغير, ولتهيئة المتغير نعطيه قيمة بدائية مثلا: (hi)</br>-
                                                مثال عن تعريف متغير من توضيح النوع و إعطائه قيمه مباشرةً عند إنشائه:</br>-
                                                ;String var= hi</br>
                                                وتستطيع طباعة  قيمة المتغير باستخدام دالة الطباعة وهي من الدوال الجاهزة في لغة الجافا: ;()system.out.println</br>-
                                                وعند طباعة قيمة  المتغير نكتب اسم المتغير بدون علامات التنصيص</br>-
                                            </h2>
                                            </br>
                                              <a href="game.php?l=2&g=1" class="button green pull-left">بدء اللعبة <span>&#xf137;</span></a>
                                              <div id="buttons">
						<a href="dashboard.php" class="button green pull-"><span>&#xf138;</span> العودة للوحة التحكم</a>
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




