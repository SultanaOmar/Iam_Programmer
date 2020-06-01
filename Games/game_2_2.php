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
		#outer-dropzone {
		    height: 80px;
			width: 80px;
		}

		#inner-dropzone {
		  height: 80px;
		  width: 20%;
		  display: inline-block;
		}

		.dropzone, .dropzone2 {
		  display:inline-block;
		  background-color: #ccc;
		  border: dashed 4px transparent;
		  border-radius: 4px;
		  margin: 10px auto 30px;
		  padding: 10px;
		  width: 80%;
		  transition: background-color 0.3s;
		  border: dotted; 
		}

		.drop-active {
		  border-color: #aaa;
		}

		.drop-target {
		  background-color: #29e;
		  border-color: #fff;
		  border-style: solid;
		}

		.drag-drop {
		    height: 80px;
			width: 80px;
		  display: inline-block;
		  min-width: 40px;
		  padding: 2em 0.5em;

		  color: #fff;
		  background-color: #29e;
		  border: solid 2px #fff;

		  -webkit-transform: translate(0px, 0px);
				  transform: translate(0px, 0px);

		  transition: background-color 0.3s;
		}

		.drag-drop.can-drop {
		  color: #000;
		  background-color: #4e4;
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

		
			<section dir="rtl" id="content" class="col-lg-7">
				<div class="cloud2">
					<h1><span id="title">أ</span></h1>
				</div>

				<div class="content-bg" style="background: #99c6df;">
					<div id="desc">
                                            <h2 class="entry-title"> . الان نكون الدالة التي تعود بقيمة.....</br>
                                                    </br>من هنا بأمكانك إختيار الإجابة بحسب ترتيبها الصحيح</h2>
						<br />
						<div id="X" align="center">
                                                    <div id="yes-drop" name="3-" class="draggable drag-drop">return</div>
							<div id="yes-drop" name="2-" class="draggable drag-drop">x</div>
							<div id="yes-drop" name="1-" class="draggable drag-drop">;</div>
						
							
							<br />
							<br />
							<br />
							<div id="outer-dropzone" name="1" class="dropzone"></div>
							<div id="outer-dropzone" name="2" class="dropzone"></div>
							<div id="outer-dropzone" name="3" class="dropzone"></div>
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
    <script>

interact('.draggable')
  .draggable({
  
    inertia: true,
   
    restrict: {
      restriction: "parent",
      endOnly: true,
      elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
    },
   
    autoScroll: true,

   
    onmove: dragMoveListener,
 
    onend: function (event) {
      var textEl = event.target.querySelector('p');

      textEl && (textEl.textContent =
        'moved a distance of '
        + (Math.sqrt(event.dx * event.dx +
                     event.dy * event.dy)|0) + 'px');
    }
  });

  function dragMoveListener (event) {
    var target = event.target,
    
        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

 
    target.style.webkitTransform =
    target.style.transform =
      'translate(' + x + 'px, ' + y + 'px)';

  
    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
  }

 
  window.dragMoveListener = dragMoveListener;


interact('.dropzone').dropzone({
  
  accept: '#yes-drop',
  
  overlap: 0.75,

  

  ondropactivate: function (event) {
   
    event.target.classList.add('drop-active');
  },
  ondrop: function (event) {
	var box = event.target;
	var ans_box = event.relatedTarget;
	var box_name = $(box).attr('name');
	var ans_name = $(ans_box).attr('name');
	
	if(ans_name == (box_name+'-')) {
	event.relatedTarget.style.backgroundColor = "green";
	event.relatedTarget.classList.remove("draggable");
	document.getElementsByName(box_name)[0].className = "dropzone2 drop-active";
	
	
	if(document.getElementsByName('1-')[0].style.backgroundColor == 'green'
	&& document.getElementsByName('2-')[0].style.backgroundColor == 'green'
	&& document.getElementsByName('3-')[0].style.backgroundColor == 'green'
	){
		document.getElementById('desc').innerHTML = '<br /><h2 style="color:red">رائع.... حصلت على دالة تعود بقيمة X ..<br /></br> ;return  x </br> <br />بإمكانك المتابعة للمرحلة التالية</br> </h2><br />';
		document.getElementById('buttons').innerHTML += '<a href="game.php?l=2&g=3" class="button green pull-left"><span>&#xf137;</span> التالي</a>';
		document.getElementById("title").innerHTML = "مبروووك";
	}
	} else {
		event.relatedTarget.style.backgroundColor = "red";
	}
	
  }
});
    </script>
	</body>
</html>
