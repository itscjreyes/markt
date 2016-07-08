$(function(){

	console.log("Like what you see? Contact me at hello@cjreyes.ca!");

	// Hamburger menu functionality
	$('.hamburger').on('click', function(){
		$(this).toggleClass('open');
		$('.mainNav').toggleClass('show');
		$('header h2').toggleClass('titleShow');
	});

	// Scroll Reveal
	window.sr = ScrollReveal();
	sr.reveal('.archiveRecipes figure', {duration: 700, distance: '80px', origin: 'bottom', easing: 'linear'});

});