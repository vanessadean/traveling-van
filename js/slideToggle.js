$(document).ready(function () {
	$('#one .heading').toggleClass('active');
	$('#two .text').slideToggle();
	$('#three .text').slideToggle();

	$('#one .heading').click(function() {
		$(this).toggleClass('active');
		$('#one .text').slideToggle();
	});

	$('#two .heading').click(function() {
		$(this).toggleClass('active');
		$('#two .text').slideToggle();
	});

	$('#three .heading').click(function() {
		$(this).toggleClass('active');
		$('#three .text').slideToggle();
	});

	$('.heading').hover(function() {
	 	$(this).toggleClass('active');
	});

});
