<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索结果</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/search-result.css">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_798448_0sefeo6pgnaj.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="search-result">

		<section class="menu">
			<?php include './component/menu.php'; ?>
		</section>
		
		<?php if(getKeyword()) { ?>
			<p class="search-keyword">
				关于<?php echo getKeyword(); ?>的搜索结果
			</p>
	 	<?php } ?>
		

		
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
			localStorage.setItem("title", '搜索 京都微网站');
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
	<script type="text/javascript" src="js/search-result.js"></script>
</body>
</html>