//JQuery for page animation on document load

$(function(){
	var introText = $('#intro');
	introText.fadeIn(2000)
		.delay(1000)
		.fadeOut(1000);
	var nav = $('.navigation');
	nav.delay(4000)
		.slideDown(500);
	var header = $('#header');
	header.delay(5000)
			.fadeIn(500);
	var services = $('#services');
	services.delay(5000)
			.slideDown(500);
	
	var growthIcon = $('#growth-icon');
	growthIcon.mouseover(function(){
		growthIcon.attr('src','assets/img/growth-icon_white.png');
	});
	growthIcon.mouseleave(function(){
		growthIcon.attr('src','assets/img/growth-icon.png');
	});
});