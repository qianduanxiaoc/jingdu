<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>律师学院</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/academy.css">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_798448_0sefeo6pgnaj.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="academy">

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
			</div>
		</section>

		<form action="" method="post" class="academy-form">
			<div class="academy-form-pw">
				<label>密码</label>
				<input placeholder="请输入密码">
			</div>
			<p class="academy-form-dese">本视频仅限京都员工使用，获取密码请联系品牌部。</p>
			<button class="btn">确定</button>
		</form>

		<div class="mask"></div>
	</div>
	
	<script>

		window.onload = function() {
			localStorage.setItem("title", '律师学院');
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
	<script type="text/javascript" src="js/live.js"></script>
</body>
</html>