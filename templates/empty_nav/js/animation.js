//Authored By Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//JQuery for site animation upon document load

$(function(){
	var nav = $('.navigation');
	nav.delay(1000)
		.slideDown(500);
	
	
	var copyright = $('#copyright');
	copyright.delay(1000)
			.fadeIn(500);
//	var flags = $('#flags');
//	flags.delay(10000).fadeIn(1000);
  });