    //jQuery.noConflict();
    jQuery(document).ready(function($){
    
        jQuery('.mcol').makeacolumnlists({cols: 3, colWidth: 305, equalHeight: 'ul', startN: 1});
        jQuery('.mcol2').makeacolumnlists({cols: 3, colWidth: 305, equalHeight: 'ul', startN: 1});
       
       	jQuery(".about").click(function(){
       		jQuery("#about").slideto({highlight: false});
       	});
       	jQuery("#gotop").click(function(){
       		jQuery("#top").slideto({highlight: false});
       	});
       	
       	jQuery("#top").fadeIn(500);
       	jQuery("#menu").fadeIn(900);
       	
    });