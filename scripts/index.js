(function($){
	/* blogcontent hover */
	$('.blogcontent li').hover(function(){
		$(this).css('background-color','#C3E89E');		
	},function(){
		$(this).css('background-color','#F4F4F4');
	});
	/* 二级菜单*/
	$('ul.nav li').hover(function(){
		$(this).find('.subnav').show();
	},function(){
		$(this).find('.subnav').hide();
	});
	/* 邮箱提醒 */
	var mailarray=["gmail.com","sina.com","163.com","taobao.com"];
	var tip=$('#username').closest('form').find('.emailtip');
	for(var i = 0, l = mailarray.length; i < l; i++){
		tip.append("<li></li>");
	}
	document.getElementById('username').oninput=function(){
		var changetext=$(this).val();
		tip.show();		
		tip.find('li').each(function(index){
			if(index == 0)
				$(this).html(changetext);
			else{
				$(this).html(changetext+"@"+mailarray[index]);
			}
		});
		console.log(123);
	}
	$('#username').blur(function(){
		tip.hide();
	});
	$('figure.welcome ul.emailtip li').hover(function(){
		$(this).css('background-color','#BCDBE4');	
	},function(){
		$(this).css('background-color','#FFFFFF');	
	});
	
})(jQuery);