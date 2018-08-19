
<?php 
	function getKeyword() {
		if($_SERVER["REQUEST_METHOD"] == "GET") {
			return $_GET["keyword"];
		} else {
			return "";
		}
	}
?>

<div class='menu-inner'>
	<div class="menu-main">
		<span class='iconfont icon-list' id="icon-menu"></span>
		<h2 class='menu-title'></h2>
		<span class='iconfont icon-search' id="icon-search"></span>
	</div>

	<div class="menu-list">
		<span class="iconfont icon-close" id="menu-list-close"></span>
		<div class="menu-logo">京都logo</div>
		<ul class="menu-items">
			<li><a href="index.php"><span class="iconfont icon-home"></span>首页</a></li>
			<li><a href="subject.php"><span class="iconfont icon-article"></span>文章荐读</a></li>
			<li><a href="group.php"><span class="iconfont icon-ren"></span>专业团队</a></li>
			<li><a href="live.php"><span class="iconfont icon-video"></span>直播平台</a></li>
			<li><a href="offline.php"><span class="iconfont icon-now"></span>线下活动</a></li>
			<li><a href="periodical.php"><span class="iconfont icon-book"></span>京东刊物</a></li>
			<li><a href="about.php"><span class="iconfont icon-tip"></span>关于京都</a></li>
		</ul>
	</div>

	<div class="menu-search">
		<form action="search-result.php" method="get">
			<input type="text" name="keyword" value="<?php echo getKeyword();?>" placeholder="请输入关键字" class="menu-search-text">
			<button class="btn menu-search-btn">
				<span class="iconfont icon-search"></span>
			</button>
		</form>
	</div>
</div>