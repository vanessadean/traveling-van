$(document).ready(function () {
	$('#one .heading').toggleClass('active');
	$('#two .text').slideToggle();
	$('#three .text').slideToggle();

	$('#one').click(function() {
		$('#one .heading').toggleClass('active');
		$('#one .text').slideToggle();
	});

	$('#two').click(function() {
		$('#two .heading').toggleClass('active');
		$('#two .text').slideToggle();
	});

	$('#three').click(function() {
		$('#three .heading').toggleClass('active');
		$('#three .text').slideToggle();
	});

	$('.heading').hover(function() {
	 	$(this).toggleClass('active');
	});

});
