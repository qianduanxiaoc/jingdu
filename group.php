<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>专业团队</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/group.css">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_798448_0sefeo6pgnaj.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="group">
		<div class="group-wraper">
				
			<section class="menu">
				<?php
					include './component/menu.php';
				?>
			</section>

			<section class="group-hotline">
				<span class="iconfont icon-kf"></span>全国免费咨询电话<a href="tel:400-700-3900">400-700-3900</a>
			</section>

			<section class="group-search">
				<span>按律师姓名搜索<span class="iconfont icon-search"></span></span>
				<input type="text" placeholder="请输入律师姓名">
			</section>

			<section class="group-tab">
				<?php for($i=0; $i<3; $i++) {   ?>
					<div class="group-tab-item <?php if($i === 0) echo 'active' ?>" attr-index="<?php echo $i ?>">
						<span>专业领域</span>
						<span class="iconfont icon-arrow"></span>
					</div>
				<?php } ?>
				
				<?php for($j=0; $j<3; $j++) {   ?>
					<div class="group-tab-list" attr-index="<?php echo $j ?>">
						<div class="active">
							<span>刑事辩护与代理</span>
						</div>
						<?php for($i=0; $i<4; $i++) {   ?>
							<div>
								<span>刑事辩护与代理</span>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</section>
		</div>
		

		<?php for($i=0; $i<6; $i++) {   ?>
			<a href="author.php">
				<section class="author-link large">
						<div class="author-avator">
							<img src="http://img18.3lian.com/d/file/201710/06/7eb9be3852278a9007aa5348be5619f6.jpg" alt="头像">
						</div>
						<div class="author-info">
							<p>姓名</p>
							<span class="author-job">职称</span>
							<p>
								<?php for($j=0; $j<3; $j++) {   ?>
									<span class="author-tag">刑事辩护</span>
								<?php } ?>
							</p>
						</div>
				</section>
			</a>
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
	<script type="text/javascript" src="js/group.js"></script>
</body>
</html>