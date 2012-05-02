<link rel="stylesheet" href="style/picshow.css" type="text/css" media="screen"/>
<script type="text/javascript" src="scripts/jquery.tinycircleslider.min.js"></script>	
<script type="text/javascript">
	$(document).ready(function(){
		$('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true });
	});
</script>
<aside class="sidebar">
	<section class="login">
		<!-- 登录 -->
		<figure class="welcome">
			<figcaption>欢迎来到Jason Blog</figcaption>
			<form name="login" action="#" method="post">
				<div>
					<label for="username">邮箱</label>
					<input type="email" name="username" id="username" autocomplete="off" class="input_hover" required />
				</div>
				<div>
					<label for="password">密码</label>
					<input type="password" name="password" id="password" class="input_hover" required />
				</div>
				<div>
					</label><input type="checkbox" name="" />
					<span>记住我</span>
					<input type="submit" name="" value="登&nbsp;录" />
				</div>	
				<ul class="emailtip">
				</ul>
			</form>
		</figure>
	</section>
	<section class="picshow">
		<header class="category_head">
			<h1>趣味图片</h1>
		</header>
		<div id="rotatescroll">
			<div class="viewport">
				<ul class="overview">
					<li><a href="#"><img src="images/img1_m.jpg" /></a></li>
					<li><a href="#"><img src="images/img2_m.jpg" /></a></li>
					<li><a href="#"><img src="images/img6_m.jpg" /></a></li>
					<li><a href="#"><img src="images/img9_m.jpg" /></a></li>
					<li><a href="#"><img src="images/img10_m.jpg" /></a></li>															
				</ul>
			</div>
			<div class="dot"></div>
			<div class="overlay"></div>
			<div class="thumb"></div>
		</div>
	</section>
	<section class="tagCloud">
		<!-- 标签云 -->
		<header class="category_head">
			<h1>热门标签</h1>
		</header>
		<div id="tagCloud">
			<a href="javascript:;">Html5</a>
			<a href="javascript:;">Css3</a>
			<a href="javascript:;">Javascript</a>
			<a href="javascript:;">SetInterval</a>
			<a href="javascript:;">Ajax</a>
			<a href="javascript:;">Jquery</a>
			<a href="javascript:;">UED</a>
			<a href="javascript:;">taps</a>
			<a href="javascript:;">resource</a>
			<a href="javascript:;">Xhtml</a>
			<a href="javascript:;">Ubuntu</a>
			<a href="javascript:;">Sublime</a>
			<a href="javascript:;">Xml</a>
			<a href="javascript:;">Json</a>
			<a href="javascript:;">Iphone</a>
			<a href="javascript:;">Ipad3</a>
			<a href="javascript:;">Mac</a>
			<a href="javascript:;">Nodepad++</a>
			<a href="javascript:;">CPU</a>
			<a href="javascript:;">Air</a>
			<a href="javascript:;">Nike</a>
			<!-- <a href="javascript:;">Linus</a>
			<a href="javascript:;">Nokia</a>
			<a href="javascript:;">Sony</a>
			<a href="javascript:;">Nodejs</a>
			<a href="javascript:;">Canvs</a>
			<a href="javascript:;">Transform</a>
			<a href="javascript:;">progress</a>
			<a href="javascript:;">Concurrent</a>	 -->
		</div>
	</section>
	<section class="category">
		<!-- 文章分类 -->
		<header class="category_head">
			<h1>热门分类</h1>
		</header>
		<nav class="category_nav">
			<ul>
				<li><a href="javascript:;">全部博文</a><span>(200)</span></li>
				<li><a href="javascript:;">html5</a><span>(18)</span></li>
				<li><a href="javascript:;">Nodejs</a><span>(46)</span></li>
				<li><a href="javascript:;">Css3</a><span>(12)</span></li>
				<li><a href="javascript:;">Ajax</a><span>(23)</span></li>
				<li><a href="javascript:;">Javascript</a><span>(30)</span></li>
				<li><a href="javascript:;">Tips</a><span>(23)</span></li>
			</ul>
		</nav>
	</section>
	<section class="comment">
		<!-- 最新评论 -->
		<header class="category_head">
			<h1>最新评论</h1>
		</header>
		<nav class="comment_nav">
			<dl>
				<dt class="fd-clr">
					<span class="comment_name">Jason</span>
					<time datetime="2012-04-01" class="comment_time">2012.04.01 16:24 </time>
				</dt>
				<dd>
					<p><a href="javascript:;">今天Jason-Blog发布上线了...</a></p>
				</dd>
			</dl>
			<dl>
				<dt class="fd-clr">
					<span class="comment_name">Kobe</span>
					<time datetime="2012-04-01" class="comment_time">2012.03.14 09:24</time>
				</dt>
				<dd>
					<p><a href="javascript:;">谢谢，正是我所需要的~</a></p>
				</dd>
			</dl>
			<dl>
				<dt class="fd-clr">
					<span class="comment_name">前端攻城湿</span>
					<time datetime="2012-04-01" class="comment_time">2012.02.14 20:01</time>
				</dt>
				<dd>
					<p><a href="javascript:;">不想打印网址，你设置IE 的页面设置即可...</a></p>
				</dd>
			</dl>
			<dl>
				<dt class="fd-clr">
					<span class="comment_name">淘宝ued</span>
					<time datetime="2012-04-01" class="comment_time">2012.02.12 10:56</time>
				</dt>
				<dd>
					<p><a href="javascript:;">打印前能不能先返回 false？这样按后退的时</a></p>
				</dd>
			</dl>
			<dl>
				<dt class="fd-clr">
					<span class="comment_name">丘比特</span>
					<time datetime="2012-04-01" class="comment_time">2012.02.01 22:06</time>
				</dt>
				<dd>
					<p><a href="javascript:;">不错呀，效果很好看，收藏了...</a></p>
				</dd>
			</dl>
		</nav>
	</section>
</aside>
<script type="text/javascript" src="scripts/tagcloud.js"></script>	







	