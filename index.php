<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_798448_0sefeo6pgnaj.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="home">

		<section class="menu">
			<?php
				include './component/menu.php';
			?>
		</section>

		<section class="sub-menu">
			<div class="sub-menu-inner">
				<a class="sub-menu-item active">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
				<a class="sub-menu-item">知识产权</a>
			</div>
		</section>

		<section class="swiper">
			<?php $total = 3 ?>
			<div class="swiper-inner">
				<?php for($i=0; $i<$total; $i++) {   ?>
					<div class="swiper-item">
						<a>
							阿斯顿发送到发送到发斯蒂芬
							<?php echo "第"; echo $i+1; echo "屏"  ?>
						</a>
					</div>
				<?php } ?>
			</div>

			<div class="swiper-dot">
				<?php for($i=0; $i<$total; $i++) {   ?>
					<span class="<?php if($i === 0) echo 'active'; ?>"></span>
				<?php } ?>
			</div>
		</section>

		<section class="banner">
			<?php for($i=0; $i<2; $i++) {   ?>
				<a class="banner-item">
					<!-- <img src=""> -->
					直播平台
				</a>
			<?php } ?>
		</section>
		
		<?php for($i=0; $i<5; $i++) {   ?>
			<article class="list list-img">
				<a href="article.php">
					<div  class="list-detail list-detail-s">
						<h2>有图有图有图有图有图有图有图有图有图有图有图有图有图有图有图有图有图有图有图有图</h2>
						<span class="list-name">姓名</span>
						<span class="list-time">2018-09-09</span>
					</div>
					<div class="list-img">
						<img src="http://www.daqianduan.com/wp-content/uploads/2017/09/p1.jpg">
					</div>
				</a>
			</article>

			<article class="list list-img">
				<a href="article.php">
					<div  class="list-detail">
						<h2>无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图无图</h2>
						<span class="list-name">姓名</span>
						<span class="list-time">2018-09-09</span>
					</div>
				</a>
			</article>
		<?php } ?>



		<div class="mask"></div>
	</div>
	
	<script>

		window.onload = function() {
			localStorage.setItem("title", '京都微网站');
			$('.menu-title')[0].innerHTML = localStorage.getItem("title")
		}

	    (function (doc, win) {
	        var docEl = doc.documentElement;
	        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize';
	        recalc = function () {
	            var clientWidth = docEl.clientWidth;
	            if (!clientWidth) return;
	            docEl.style.fontSize = 10 * (clientWidth / 375) + 'px';
	        };
	        if (!doc.addEventListener) return;
	        win.addEventListener(resizeEvt, recalc, false);
	        doc.addEventListener('DOMContentLoaded', recalc, false);
	    }(document,window))

	</script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/swiper.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>