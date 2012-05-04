<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Image Zoom</title>
<link rel="stylesheet" href="../style/global.css" />
<link rel="stylesheet" href="../style/screen.css" />
<link rel="stylesheet" href="../style/article.css" />
<link type="text/css" rel="stylesheet" href="../style/zoomy.css" />
<link rel="stylesheet" href="../style/menu.css" />
</head>
<body>
<div class="wrapper">
	<?php include("../template/header.php"); ?>
	<div class="main fd-clr">
		<section class="blog-article">
			<article>
			<h1 class="blog-tiitle">Image Zoom</h1>
			<aside class="blog-aside">
			<span>Jquery / </span> 
			<time datetime="12:31  2012.3.22">12:31  2012-03-22</time>
			</aside>
			<section class="demo">	
				<div class="introduction"><strong>[核心提示]</strong> 利用Jquery将两张相同但分辨率不同的图片重叠显示，同时用css3“画出”放大镜和蒙版的效果，两者结合实现其放大功能。</div>
				<a class="zoom" href="../images/lucyZoom.jpg"><img src="../images/lucyTn.jpg" /></a>
			</section>
			<section class="share-tag">
				<div class="blog-tag">
					<dl class="fd-clr">
						<dt>标签：</dt>
						<dd>Jquery</dd>
						<dd>css3</dd>
						<dd>Html5</dd>
					</dl>
				</div>
				<div class="blog-suggest fd-clr">
					<a class="good"></a>
					<span>有21人喜欢</span>
					<a href="javascript:;" class="share-blog"></a>
					<script type="text/javascript" src="../scripts/article.js"></script>
					<a href="javascript:void(0)" onclick="postToWb();" close="tmblog" class="s2 qqweibo" title="分享到腾讯微博"></a>
					<a rel="nofollow" class="fav_twitter" href="javascript:window.open('http://twitter.com/home?status='+encodeURIComponent(document.location.href)+'&nbsp;'+encodeURIComponent(document.title));void(0)"></a>
					<g:plusone size="small" href="http://www.JasonBlog.com"></g:plusone>
				</div>
			</section>
			</article>
		</section>
		
		<section class="blog-comment fd-clr">
			<figure class="joindiscuss">
				<figcaption>参与讨论</figcaption>
				<form method="get" name="" action="">
					<textarea class="discuss"></textarea>
					<input class="commentsubmit" type="submit" name="" value="确 定"/>
				</form>				
			</figure>
			<nav class="commentlist">
				<ul>				
					<li class="fd-clr">
						<div class="avatar">
						<a href="javascript:;"><img src="../images/avatar1.jpg" /></a>
						</div>
						<div class="commentdetail">
							<div class="fd-clr">
							<span class="avatarname">Jason</span>
							<time class="avatartime"datetime="2012.3.14">约5小时前</time>
							</div>
							<p><a href="javascript:;">有这个应用，比如http://tech.qq.com/a/20120321/000242.htm，据文章所说，会基于地理位置拉取Instagram等社交网络的内容，但实际体验不知。</a></p>
						</div>
					</li>
					<li class="fd-clr">
						<div class="avatar">
						<a href="javascript:;"><img src="../images/avatar2.jpg" /></a>
						</div>
						<div class="commentdetail">
							<div class="fd-clr">
							<span class="avatarname">前端攻城湿</span>
							<time class="avatartime"datetime="2012.3.14">约10小时前</time>
							</div>
							<p><a href="javascript:;">说到地里信息，如果图片分享类的应用能更好更直观的整合地理信息，就更cool了</a></p>
						</div>
					</li>
					<li class="fd-clr">
						<div class="avatar">
						<a href="javascript:;"><img src="../images/avatar3.jpg" /></a>
						</div>
						<div class="commentdetail">
							<div class="fd-clr">
							<span class="avatarname">丘比特</span>
							<time class="avatartime"datetime="2012.3.14">约1天前</time>
							</div>
							<p><a href="javascript:;">如果可以在Linux的发型版上直接运行Android程序，那这个世界是多么的美好啊</a></p>
						</div>
					</li>
					<li class="fd-clr">
						<div class="avatar">
						<a href="javascript:;"><img src="../images/avatar4.jpg" /></a>
						</div>
						<div class="commentdetail">
							<div class="fd-clr">
							<span class="avatarname">kobe</span>
							<time class="avatartime"datetime="2012.3.14">约3天前</time>
							</div>
							<p><a href="javascript:;">近日众公司公布的财报显示，腾讯的网游收入在2011年全年达到158亿元</a></p>
						</div>
					</li>
					<li class="fd-clr">
						<div class="avatar">
						<a href="javascript:;"><img src="../images/avatar5.jpg" /></a>
						</div>
						<div class="commentdetail">
							<div class="fd-clr">
							<span class="avatarname">nodejs</span>
							<time class="avatartime"datetime="2012.3.14">约1个月前</time>
							</div>
							<p><a href="javascript:;">价值不能按人来分的，固定资产值钱，品牌值钱，模式的积累值钱，还有无数的无形资产的值钱，要算人均价值多少，首先得除去其他资产，得到人总价值，然后按人头来算人均价值……</a></p>
						</div>
					</li>
				</ul>
			</nav>
		</section>
	</div>
	<?php include("../template/footer.php"); ?>								
</div>
<script type="text/javascript" src="../scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../scripts/totop.js"></script>
<script type="text/javascript" src="../scripts/screen.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="../scripts/jquery.zoomy.js"></script>
<script type="text/javascript">
$(function(){    
	$('.zoom').zoomy();
});
</script>
</body>
</html>	























