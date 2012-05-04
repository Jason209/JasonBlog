(function($){
	/* totop */
	$().UItoTop();
	/* bookmark */
	function AddFavorite(sURL, sTitle){
		try{
			window.external.addFavorite(sURL, sTitle);
		}
		catch (e){
			try{
				window.sidebar.addPanel(sTitle, sURL, "");
			}
			catch (e){
				alert("抱歉您的浏览器暂不支持该功能，请使用Ctrl+D手动进行添加书签");
			}
		}
	}
	$('a.bookmark').click(function(){
		AddFavorite('http://www.jason.com', 'JasonBlog');
	});
	/* 二级菜单*/
	/* $('ul#nav li').hover(function(){
		$(this).find('.subs').show();
	},function(){
		$(this).find('.subs').hide();
	});
	$('ul.subs').hover(function(){
		$(this).show();
	},function(){
		$(this).hide();
	}); */
})(jQuery);