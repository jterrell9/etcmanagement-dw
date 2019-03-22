//Authored By Jack Terrell
//Copyright StrongWares LLC and Etc. Management LLC 2019

//JQuery for site animation upon document load

$(function(){
	var scroll = function(scrollPhotos) {
		var photoScroller = $('#photo-scroller');
		photoScroller.css('background-image', "url('assets/img/img-scroll/" + scrollPhotos[0] + "')");
	};
	
	var textBars = $('#text-bar1');
	textBars.css('opacity', '.9');
	var textBarChidren = $('#text-bar1 *');
	textBarChidren.css('opacity','1');
	
	var introText = $('#intro');
	introText.fadeIn(2000)
		.delay(1000)
		.fadeOut(1000);
	var nav = $('nav.navigation');
	nav.delay(4000)
		.slideDown(500);
	var artistSelctor = $('nav.artist-selector');
	artistSelctor.delay(5000)
		.slideDown(1000);
	var main = $('#main');
	main.delay(6000)
		.fadeIn(1000);
	
	
	var copyright = $('#copyright');
	copyright.delay(7500)
			.fadeIn(500);
  });