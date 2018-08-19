<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>直播详情</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/live-detail.css">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_798448_0sefeo6pgnaj.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="live-detail">

		<section class="menu">
			<?php
				include './component/menu.php';
			?>
		</section>

		<div class="mask"></div>
	</div>
	
	<script>

		window.onload = function() {
			localStorage.setItem("title", '京都直播详情');
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
	<script type="text/javascript" src="js/live-detail.js"></script>
</body>
</html>