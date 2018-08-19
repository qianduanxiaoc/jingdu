<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>人员详情</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/author.css">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_798448_0sefeo6pgnaj.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="author">
				
		<section class="menu">
			<?php
				include './component/menu.php';
			?>
		</section>

		<section class="author-h">
			<div class="author-card">
				<img src="http://img18.3lian.com/d/file/201710/06/7eb9be3852278a9007aa5348be5619f6.jpg" alt="头像">

				<p class="author-name">姓名</p>
				<p class="author-job">职位</p>
				<?php for($i=0; $i<3; $i++) {?>
					<span class="author-tag">领域</span>
				<?php } ?>
				

				<div class="author-contact">
					<p><span class="iconfont icon-tel"></span>1888 111011-11</p>
					<p><span class="iconfont icon-phone"></span>1888 111011-11</p>
					<p><span class="iconfont icon-msg"></span>8888888@163.com</p>
				</div>

				<button class="btn">查看微信</button>
			</div>
		</section>

		<section class="author-resume">
			<h3 class="release-title middle">专业领域</h3>
			<div class="author-resume-list">
				<p class="author-resume-item">刑事代理与辩护</p>
			</div>
		</section>

		<section class="author-resume">
			<h3 class="release-title middle">专业领域</h3>
			<p class="author-resume-text">刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护刑事代理与辩护</p>
		</section>

		<section class="author-resume">
			<h3 class="release-title middle">工作业绩<span class="iconfont icon-slide"></span></h3>
			<div class="author-resume-list">
				<?php for($i=0; $i<8; $i++) {?>
					<p class="author-resume-item">刑事代理与辩护</p>
				<?php } ?>
			</div>
		</section>

		<section class="author-resume-group">
			<div class="author-resume-title">
				<h3 class="release-title middle">其他<span class="iconfont icon-slide"></span></h3>
			</div>

			<?php for($j=0; $j<3; $j++) {?>
				<div class="author-resume">
					<div class="author-resume-list">
						<p class="author-resume-item title">社会职务</p>
						<?php for($i=0; $i<8; $i++) {?>
							<p class="author-resume-item">刑事代理与辩护</p>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</section>

		<div class="mask"></div>

		<?php
			include './component/footer.php';
		?>
	</div>
	
	<script>

		window.onload = function() {
			localStorage.setItem("title", '人员姓名');
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
	<script type="text/javascript" src="js/author.js"></script>
</body>
</html>