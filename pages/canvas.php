<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Canvas Demo</title>
<link rel="stylesheet" href="../style/global.css" />
<link rel="stylesheet" href="../style/screen.css" />
<link rel="stylesheet" href="../style/article.css" />
</head>
<body>
<div class="wrapper">
	<?php include("../template/header.php"); ?>
	<div class="main fd-clr">
		<section class="blog-article">
			<article>
			<h1 class="blog-tiitle">Canvas 拼图游戏</h1>
			<aside class="blog-aside">
			<span>Canvas / </span> 
			<time datetime="12:31  2012.3.22">12:31  2012-03-22</time>
			</aside>
			<section class="demo">	
				<div class="introduction"><strong>[核心提示]</strong> 用户可选择一张本地图片，单击“创建拼图”按钮后出现打乱的图片片段，用户需要根据记忆完成拼图。该游戏综合运用了Canvas API，FileList对象以及Blob对象来实现其功能。</div>
				<div id="puzzle_para">
					<input type="file" accept="image/*" onchange="selectFile()" id="file" />
					<input type="button" id="createPuzzle" value="创建拼图" disabled="true" onclick="drawPuzzle()" />
				</div>
				<div id="puzzle_source"></div>
				<div id="puzzle_dest"></div>
			</section>
			<section class="share-tag">
				<div class="blog-tag">
					<dl class="fd-clr">
						<dt>标签：</dt>
						<dd>Google+</dd>
						<dd>社交网络</dd>
						<dd>Facebook</dd>
					</dl>
				</div>
				<div class="blog-suggest fd-clr">
					<a class="good"></a>
					<span>有11人喜欢</span>
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
<script type="text/javascript" src="../scripts/puzzle.js"></script>
</body>
</html>	























