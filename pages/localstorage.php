<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Localstorage</title>
<link rel="stylesheet" href="../style/global.css" />
<link rel="stylesheet" href="../style/screen.css" />
<link rel="stylesheet" href="../style/article.css" />
<link rel="stylesheet" href="../style/localstorage.css" />
<link rel="stylesheet" href="../style/menu.css" />
</head>
<body>
<div class="wrapper">
	<?php include("../template/header.php"); ?>
	<div class="main fd-clr">
		<section class="blog-article">
			<article>
			<h1 class="blog-tiitle">LocalStorage</h1>
			<aside class="blog-aside">
			<span>Jquery / </span> 
			<time datetime="12:31  2012.5.4">12:00  2012-05-04</time>
			</aside>
			<section class="demo fd-clr">	
				<div class="introduction"><strong>[核心提示]</strong> html5中提供一种在客户的段本地保存数据的功能，它就是Web Storage。Web Storagef分为两种：sessionStorage和localStorage。本示例用到的是localStorage，因为它在下次打开浏览器时依然能够读取被保存的数据。</div>
				<div id="localstorage">
				   <a href="#" id="addnote"><img src="../images/add.png" alt="Add Sticky Note" title="Add a new sticky note"></a>
				   <a href="#" id="removenotes"><img src="../images/remove.png" alt="Remove all sticky notes" title="Remove all sticky notes"></a>
				   <div class="clear">&nbsp;</div>
			    </div>
			</section>
			
			<section class="share-tag">
				<div class="blog-tag">
					<dl class="fd-clr">
						<dt>标签：</dt>
						<dd>LocalStorage</dd>
						<dd>css3</dd>
						<dd>Html5</dd>
						<dd>Web Storage</dd>
					</dl>
				</div>
				<div class="blog-suggest fd-clr">
					<a class="good"></a>
					<span>有124人喜欢</span>
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
<script type="text/javascript" src="../scripts/modernizr.js"></script>
<script type="text/javascript" src="../scripts/localstorage.js"></script>
<script type="text/javascript" src="../scripts/prettyDate.js"></script>
</script>
</body>
</html>	























