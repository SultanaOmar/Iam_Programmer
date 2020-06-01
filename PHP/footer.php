<footer>
	<div class="footer-menu">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-12 footer-links">
				<a href="index.php">الرئيسية</a> /
				<a href="about.php">عن الموقع</a> /
				<?php if(isset($_SESSION['user'])){ ?>
				<a href="dashboard.php">لوحة التحكم</a> /
				<a href="logout.php">تسجيل الخروج</a>
				<?php } else { ?>
				<a href="login.php">الدخول</a> /
				<a href="register.php">التسجيل</a>
				<?php } ?>
			</div>
		</div>
	</div>
</footer>
