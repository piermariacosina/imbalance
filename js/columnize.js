    //jQuery.noConflict();
    jQuery(document).ready(function($){
    
        jQuery('.mcol').makeacolumnlists({cols: 3, colWidth: 305, equalHeight: 'ul', startN: 1});
        jQuery('.mcol2').makeacolumnlists({cols: 3, colWidth: 293, equalHeight: 'ul', startN: 1});
       
       	jQuery("#menu-item-17").click(function(){
       		jQuery("#about").slideto({highlight: false});
       	});
       	jQuery("#gotop").click(function(){
       		jQuery("#top").slideto({highlight: false});
       	});
       	
       	jQuery("#top").fadeIn(500);
       	jQuery("#menu").fadeIn(900);
       	
       	jQuery(".article").each(function(){
       		jQuery(this).fadeIn(jQuery.randomBetween(500, 3000));
       	
       		var padding_top = jQuery(this).children(".article-over").css("padding-top").replace("px", "");
       		
       		var padding_bottom = jQuery(this).children(".article-over").css("padding-bottom").replace("px", "");
       		
       		var padding_sum = parseInt(padding_top)+parseInt(padding_bottom);
       		
       		var preview_height = jQuery(this).children(".article-over").height();
       		
       		var article_height = parseInt(preview_height) - parseInt(padding_sum);
       		
       		jQuery(this).children(".article-over").css('height', article_height);
       	});
       	
       	jQuery(".article").mouseenter(function() {
       	jQuery(this).children(".article-over").stop().fadeOut('fast');
       
       	});
       	jQuery(".article").mouseleave(function() {
       	jQuery(this).children(".article-over").fadeIn('fast');
       	});
    });