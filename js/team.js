jQuery.noConflict();
(function($) {
	$(document).ready(function($){
   	
   	$(".team_member").mouseenter(function() {
   		$(this).children(".member-over").stop().fadeIn('slow');
   	
   	});
   	$(".team_member").mouseleave(function() {
   		$(this).children(".member-over").fadeOut('slow');
   	});
   	
   	$("#meet_team").click(function(){
   		$("#about").delay(2000).slideto({highlight: false});
   	});
});
})(jQuery);