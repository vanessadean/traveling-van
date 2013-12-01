$(document).ready(function () {
	$('.one').toggleClass('active');
	$('.text_two').slideToggle();
	$('.text_three').slideToggle();

	$('.one').click(function() {
		$('.one').toggleClass('active');
		$('.text_one').slideToggle();
	});

	$('.two').click(function() {
		$('.two').toggleClass('active');
		$('.text_two').slideToggle();
	});

	$('.three').click(function() {
		$('.three').toggleClass('active');
		$('.text_three').slideToggle();
	});

	$('.one').hover(function() {
		$('.one').toggleClass('active');
	});

	$('.two').hover(function() {
		$('.two').toggleClass('active');
	});

	$('.three').hover(function() {
		$('.three').toggleClass('active');
	});

});
