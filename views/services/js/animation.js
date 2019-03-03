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
//	var copyright = $('#copyright');
//	copyright.delay(5000)
//			.fadeIn(500);
	var growthCell = $('#growth-cell');
	var growthIcon = $('#growth-icon');
	var growthText = $('#growth-text');
	growthCell.mouseover(function(){
		growthIcon.attr('src','assets/img/growth-icon_hover.png');
		growthText.css('color','#45B5AA');
	});
	growthCell.mouseleave(function(){
		growthIcon.attr('src','assets/img/growth-icon.png');
		growthText.css('color','black');
	});
	
	var graphicDesignCell = $('#graphicDesign-cell');
	var graphicDesignIcon = $('#graphicDesign-icon');
	var graphicDesignText = $('#graphicDesign-text');
	graphicDesignCell.mouseover(function(){
		graphicDesignIcon.attr('src','assets/img/graphicDesign-icon_hover.png');
		graphicDesignText.css('color','#45B5AA');
	});
	graphicDesignCell.mouseleave(function(){
		graphicDesignIcon.attr('src','assets/img/graphicDesign-icon.png');
		graphicDesignText.css('color','black');
	});
	
	var printCell = $('#print-cell');
	var printIcon = $('#print-icon');
	var printText = $('#print-text');
	printCell.mouseover(function(){
		printIcon.attr('src','assets/img/print-icon_hover.png');
		printText.css('color','#45B5AA');
	});
	printCell.mouseleave(function(){
		printIcon.attr('src','assets/img/print-icon.png');
		printText.css('color','black');
	});
});