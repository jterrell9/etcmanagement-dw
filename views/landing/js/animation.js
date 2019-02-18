//JQuery for site animation upon document load

$(function(){
	var logo = $("#logo");
	logo.fadeIn(3000)
		.delay(1000)
		.fadeOut(1000);
	var nav = $('.navigation');
	nav.delay(5000)
		.slideDown(500);
	var form = $('#register');
	form.delay(5500)
		.fadeIn(500);
	var bigText = $('#big-text');
	bigText.delay(5500)
		.fadeIn(500);
	var logoBox = $('#logo-box');
	logoBox.delay(5500)
		.slideDown(2000);
//	var flags = $('#flags');
//	flags.delay(10000).fadeIn(1000);
  });