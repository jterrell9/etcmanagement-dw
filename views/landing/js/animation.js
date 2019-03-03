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
	var learnMoreLink = $('#learn-more-link');
	learnMoreLink.delay(7000)
		.fadeIn(500);
	var learnMore = $('#learn-more-section');
	var registerLink = $('#register-link');
	learnMoreLink.click(function() {
		logo.css('font-size', '100px');
		$('#panel1').css('opacity', '.85');
		$('#panel-container').css('opacity', '1');
		learnMoreLink.fadeOut(500);
		form.fadeOut(500);
		logo.delay(500)
			.fadeIn(500);
		learnMore.delay(1000)
			.slideDown(3000);
		registerLink.delay(4500)
			.fadeIn(500);
	});
	registerLink.click(function() {
		registerLink.fadeOut(500);
		learnMore.slideUp(3000);
		logo.delay(3000)
			.fadeOut(1000);
		form.delay(4000)
			.fadeIn(2000);
		learnMoreLink.delay(6000)
			.fadeIn(500);
	});
//	var flags = $('#flags');
//	flags.delay(10000).fadeIn(1000);
  });