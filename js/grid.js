jQuery.noConflict();
(function($) {
	$(document).ready(function($){
   	
   	$(".article").each(function(){
   		$(this).fadeIn(jQuery.randomBetween(500, 3000));
   	
   		var padding_top = $(this).children(".article-over").css("padding-top").replace("px", "");
   		
   		var padding_bottom = $(this).children(".article-over").css("padding-bottom").replace("px", "");
   		
   		var padding_sum = parseInt(padding_top)+parseInt(padding_bottom);
   		
   		var preview_height = jQuery(this).children(".article-over").height();
   		
   		var article_height = parseInt(preview_height) - parseInt(padding_sum);
   		
   		$(this).children(".article-over").css('height', article_height);
   	});
   	
   	$(".article").mouseenter(function() {
   	$(this).children(".article-over").stop().fadeOut('fast');
   
   	});
   	$(".article").mouseleave(function() {
   	$(this).children(".article-over").fadeIn('fast');
   	});
});
})(jQuery);