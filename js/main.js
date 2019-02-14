//$(function(){
//	var form = $('#register');
//	var bigText = $('#big-text');
//	var logoBox = $('#logo-box');
//	var nav = $('.navigation');
////	var logo = $('#logo');
////	logo.fadeIn(500);
////	logo.delay(1000);
////	logo.animate({
////		fontSize: "18px",
////		marginTop: "20px"
////	}, 5000, 'swing', function(){
////			form.fadeIn(100);
////			bigText.fadeIn(100);
////			logoBox.slideDown(200);
////	});
//	$(window).scroll(function(){
//		nav.slideDown(1000);
//	});
//});

$(function(){
	var logo = $("#logo");
	logo.fadeIn(3000)
		.delay(1000)
		.slideUp(1000, 'linear');
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
	var flags = $('#flags');
	flags.delay(10000).fadeIn(1000);
  });