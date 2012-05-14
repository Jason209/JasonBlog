(function($){
	/* imgdelay */
	var imgdelay = new ImagesDelay('ul.castlist-box');
	/* divdelay */
	var divdelay = new DivDelay('ul.castlist-box');
	/* blogcontent hover */
	$('.blogcontent li').hover(function(){
		$(this).css('background-color','#C3E89E');		
	},function(){
		$(this).css('background-color','#F4F4F4');
	});
})(jQuery);