(function($){
	/* divdelay */
	var divdelay = new DivDelay('section.bloglist ul');
	/* 邮箱提醒 */
	var mailarray=["gmail.com","sina.com","163.com","taobao.com"];
	var tip=$('#username').closest('form').find('.emailtip');
	var username;
	var flag=false;
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
	$('body').delegate('#username','blur',function(){
		if(flag){
			$('#username').val(username);
		}
		tip.hide();
	});
	$('figure.welcome ul.emailtip li').hover(function(){
		flag=true;
		username=$(this).text();
		$(this).css('background-color','#BCDBE4');	
	},function(){
		username=$('#username').val();
		$(this).css('background-color','#FFFFFF');	
	});
})(jQuery);