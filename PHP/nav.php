<?php
@session_start();
$pg_name = basename($_SERVER['PHP_SELF']);
?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul>
		<li <?php if($pg_name == 'index.php') echo 'class="active"'; ?>><a href="index.php">الرئيسية</a></li>
		<li <?php if($pg_name == 'about.php') echo 'class="active"'; ?>><a href="about.php">عنا</a></li>
		<?php if(isset($_SESSION['user'])){ ?>
		<li <?php if($pg_name == 'dashboard.php') echo 'class="active"'; ?>><a href="dashboard.php">لوحة التحكم</a></li>
		<li <?php if($pg_name == 'comment.php') echo 'class="active"'; ?>><a href="comment.php">إرسال تعليق</a></li>
		<li><a href="logout.php">تسجيل الخروج</a></li>
		<?php } else { ?>
		<li <?php if($pg_name == 'login.php') echo 'class="active"'; ?>><a href="login.php">تسجيل الدخول</a></li>
		<li <?php if($pg_name == 'register.php') echo 'class="active"'; ?>><a href="register.php">تسجيل حساب جديد</a></li>
		<?php } ?>
		<li class="has-children">
			<a href="#">الألعاب</a>
			<ul class="children">
                            <li><a href="Description1.php">بدء اللعبة الأولى</a></li>
                            <li><a href="Description2.php">بدء اللعبة الثانية</a></li>
                            <li><a href="Description3.php">بدء اللعبة الثالثة</a></li>
			</ul>
		</li>
	</ul>
</div>
