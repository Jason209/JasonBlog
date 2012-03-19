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
	var flag=true;
	for(var i = 0, l = mailarray.length; i <= l; i++){
		tip.append("<li></li>");
	}
	document.getElementById('username').oninput=function(){
		var changetext=$(this).val(),temp;
		flag=false;
		tip.show();	
		tip.find('li').each(function(index){
			if(index == 0)
				$(this).html(changetext);
			else if(changetext.indexOf('@') != -1){
				temp=changetext.split('@')[0];
				$(this).html(temp+"@"+mailarray[index-1]);
			}
			else{
				$(this).html(changetext+"@"+mailarray[index-1]);
			}
		});
	}
	$('body').delegate('ul.emailtip li','click',function(){
		var val=$(this).text();
		$('#username').val(val);
		tip.hide();
	});
	$('body').delegate('#username','blur',function(){
		tip.hide();
	});
	$('figure.welcome ul.emailtip li').hover(function(){
		$(this).css('background-color','#BCDBE4');	
	},function(){
		$(this).css('background-color','#FFFFFF');	
	});
	
})(jQuery);