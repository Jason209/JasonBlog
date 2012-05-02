<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Sliding Image with CSS3</title>
<link rel="stylesheet" href="../style/global.css" />
<link rel="stylesheet" href="../style/screen.css" />
<link rel="stylesheet" href="../style/article.css" />
<link type="text/css" rel="stylesheet" href="../style/zoomy.css" />
<link type="text/css" rel="stylesheet" href="../style/sliding.css" />
</head>
<body>
<div class="wrapper">
	<?php include("../template/header.php"); ?>
	<div class="main fd-clr">
		<section class="blog-article">
			<article>
			<h1 class="blog-tiitle">Sliding Image with CSS3</h1>
			<aside class="blog-aside">
			<span>CSS3 / </span> 
			<time datetime="12:31  2012.5.2">12:31  2012-03-22</time>
			</aside>
			<section class="demo">	
				<div class="introduction"><strong>[核心提示]</strong> 利用CSS3 核心的transforms 、animate属性实现4种不同的图片动画展示效果，同时利用Media Query检测当前窗口大小，使用不同样式，更好的适应手机、平板电脑等设备。</div>
			<div class="container">
				<!-- Codrops top bar -->
				<section class="cr-container demo1">				
					<input id="demo1-select-img-1" name="demo1-radio-set-1" type="radio" class="cr-selector-img-1" checked/>
					<label for="demo1-select-img-1" class="cr-label-img-1">1</label>
					<input id="demo1-select-img-2" name="demo1-radio-set-1" type="radio" class="cr-selector-img-2" />
					<label for="demo1-select-img-2" class="cr-label-img-2">2</label>
					
					<input id="demo1-select-img-3" name="demo1-radio-set-1" type="radio" class="cr-selector-img-3" />
					<label for="demo1-select-img-3" class="cr-label-img-3">3</label>
					
					<input id="demo1-select-img-4" name="demo1-radio-set-1" type="radio" class="cr-selector-img-4" />
					<label for="demo1-select-img-4" class="cr-label-img-4">4</label>
					
					<div class="clr"></div>	
					<div class="cr-bgimg">
						<div>
							<span>Slice 1 - Image 1</span>
							<span>Slice 1 - Image 2</span>
							<span>Slice 1 - Image 3</span>
							<span>Slice 1 - Image 4</span>
						</div>
						<div>
							<span>Slice 2 - Image 1</span>
							<span>Slice 2 - Image 2</span>
							<span>Slice 2 - Image 3</span>
							<span>Slice 2 - Image 4</span>
						</div>
						<div>
							<span>Slice 3 - Image 1</span>
							<span>Slice 3 - Image 2</span>
							<span>Slice 3 - Image 3</span>
							<span>Slice 3 - Image 4</span>
						</div>
						<div>
							<span>Slice 4 - Image 1</span>
							<span>Slice 4 - Image 2</span>
							<span>Slice 4 - Image 3</span>
							<span>Slice 4 - Image 4</span>
						</div>
					</div>
					<div class="cr-titles">
						<h3><span>Serendipity</span></h3>
						<h3><span>Adventure</span></h3>
						<h3><span>Nature</span></h3>
						<h3><span>Serenity</span></h3>
					</div>
				</section>
				<section class="cr-container demo2">				
					<input id="demo2-select-img-1" name="demo2-radio-set-1" type="radio" class="cr-selector-img-1" />
					<label for="demo2-select-img-1" class="cr-label-img-1">1</label>
					
					<input id="demo2-select-img-2" name="demo2-radio-set-1" type="radio" class="cr-selector-img-2" checked/>
					<label for="demo2-select-img-2" class="cr-label-img-2">2</label>
					
					<input id="demo2-select-img-3" name="demo2-radio-set-1" type="radio" class="cr-selector-img-3" />
					<label for="demo2-select-img-3" class="cr-label-img-3">3</label>
					
					<input id="demo2-select-img-4" name="demo2-radio-set-1" type="radio" class="cr-selector-img-4" />
					<label for="demo2-select-img-4" class="cr-label-img-4">4</label>
					
					<div class="clr"></div>	
					<div class="cr-bgimg">
						<div>
							<span>Slice 1 - Image 1</span>
							<span>Slice 1 - Image 2</span>
							<span>Slice 1 - Image 3</span>
							<span>Slice 1 - Image 4</span>
						</div>
						<div>
							<span>Slice 2 - Image 1</span>
							<span>Slice 2 - Image 2</span>
							<span>Slice 2 - Image 3</span>
							<span>Slice 2 - Image 4</span>
						</div>
						<div>
							<span>Slice 3 - Image 1</span>
							<span>Slice 3 - Image 2</span>
							<span>Slice 3 - Image 3</span>
							<span>Slice 3 - Image 4</span>
						</div>
						<div>
							<span>Slice 4 - Image 1</span>
							<span>Slice 4 - Image 2</span>
							<span>Slice 4 - Image 3</span>
							<span>Slice 4 - Image 4</span>
						</div>
					</div>
					<div class="cr-titles">
						<h3><span>Serendipity</span></h3>
						<h3><span>Adventure</span></h3>
						<h3><span>Nature</span></h3>
						<h3><span>Serenity</span></h3>
					</div>
				</section>
				<section class="cr-container demo3">				
					<input id="demo3-select-img-1" name="demo3-radio-set-1" type="radio" class="cr-selector-img-1" />
					<label for="demo3-select-img-1" class="cr-label-img-1">1</label>
					
					<input id="demo3-select-img-2" name="demo3-radio-set-1" type="radio" class="cr-selector-img-2" />
					<label for="demo3-select-img-2" class="cr-label-img-2">2</label>
					
					<input id="demo3-select-img-3" name="demo3-radio-set-1" type="radio" class="cr-selector-img-3" checked/>
					<label for="demo3-select-img-3" class="cr-label-img-3">3</label>
					
					<input id="demo3-select-img-4" name="demo3-radio-set-1" type="radio" class="cr-selector-img-4" />
					<label for="demo3-select-img-4" class="cr-label-img-4">4</label>
					
					<div class="clr"></div>	
					<div class="cr-bgimg">
						<div>
							<span>Slice 1 - Image 1</span>
							<span>Slice 1 - Image 2</span>
							<span>Slice 1 - Image 3</span>
							<span>Slice 1 - Image 4</span>
						</div>
						<div>
							<span>Slice 2 - Image 1</span>
							<span>Slice 2 - Image 2</span>
							<span>Slice 2 - Image 3</span>
							<span>Slice 2 - Image 4</span>
						</div>
						<div>
							<span>Slice 3 - Image 1</span>
							<span>Slice 3 - Image 2</span>
							<span>Slice 3 - Image 3</span>
							<span>Slice 3 - Image 4</span>
						</div>
						<div>
							<span>Slice 4 - Image 1</span>
							<span>Slice 4 - Image 2</span>
							<span>Slice 4 - Image 3</span>
							<span>Slice 4 - Image 4</span>
						</div>
					</div>
					<div class="cr-titles">
						<h3><span>Serendipity</span></h3>
						<h3><span>Adventure</span></h3>
						<h3><span>Nature</span></h3>
						<h3><span>Serenity</span></h3>
					</div>
				</section>
				
				<section class="cr-container demo4">				
					<input id="demo4-select-img-1" name="demo4-radio-set-1" type="radio" class="cr-selector-img-1" />
					<label for="demo4-select-img-1" class="cr-label-img-1">1</label>
					
					<input id="demo4-select-img-2" name="demo4-radio-set-1" type="radio" class="cr-selector-img-2" />
					<label for="demo4-select-img-2" class="cr-label-img-2">2</label>
					
					<input id="demo4-select-img-3" name="demo4-radio-set-1" type="radio" class="cr-selector-img-3" />
					<label for="demo4-select-img-3" class="cr-label-img-3">3</label>
					
					<input id="demo4-select-img-4" name="demo4-radio-set-1" type="radio" class="cr-selector-img-4" checked/>
					<label for="demo4-select-img-4" class="cr-label-img-4">4</label>
					
					<div class="clr"></div>	
					<div class="cr-bgimg">
						<div>
							<span>Slice 1 - Image 1</span>
							<span>Slice 1 - Image 2</span>
							<span>Slice 1 - Image 3</span>
							<span>Slice 1 - Image 4</span>
						</div>
						<div>
							<span>Slice 2 - Image 1</span>
							<span>Slice 2 - Image 2</span>
							<span>Slice 2 - Image 3</span>
							<span>Slice 2 - Image 4</span>
						</div>
						<div>
							<span>Slice 3 - Image 1</span>
							<span>Slice 3 - Image 2</span>
							<span>Slice 3 - Image 3</span>
							<span>Slice 3 - Image 4</span>
						</div>
						<div>
							<span>Slice 4 - Image 1</span>
							<span>Slice 4 - Image 2</span>
							<span>Slice 4 - Image 3</span>
							<span>Slice 4 - Image 4</span>
						</div>
					</div>
					<div class="cr-titles">
						<h3><span>Serendipity</span></h3>
						<h3><span>Adventure</span></h3>
						<h3><span>Nature</span></h3>
						<h3><span>Serenity</span></h3>
					</div>
				</section>
			</div>
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























