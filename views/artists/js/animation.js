//Authored By Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//JQuery for site animation upon document load

$(function(){
	var introText = $('#intro');
	introText.fadeIn(2000)
		.delay(1000)
		.fadeOut(1000);
	var nav = $('.navigation');
	nav.delay(4000)
		.slideDown(500);
	
	
	var copyright = $('#copyright');
	copyright.delay(4500)
			.fadeIn(500);
  });