// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	$('section#questions article p').hover (function() {
		$(this).addClass('selected');
	}, function() {
		$(this).removeClass('selected');
	})

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/