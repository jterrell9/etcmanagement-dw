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
	
	var growthCell = $('#growth-cell');
	var growthIcon = $('#growth-icon');
	var growthText = $('#growth-text');
	growthCell.mouseover(function(){
		growthIcon.attr('src','assets/img/growth-icon_hover.png');
		growthText.css('color','#FFDA29');
		growthText.css('text-shadow','1px 1px 1px black');
	});
	growthCell.mouseleave(function(){
		growthIcon.attr('src','assets/img/growth-icon.png');
		growthText.css('color','black');
		growthText.css('text-shadow','none');
	});
});