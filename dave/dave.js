$(document).ready(function(){

	$('.tease_one').click(function(){
		$('.tease_one').addClass('hidden');
		$('.tease_two').removeClass('hidden');
		$('.congrats').removeClass('hidden');
	});
	$('.tease_two').click(function(){
		$('.tease_two').addClass('hidden');
		$('.tease_three').removeClass('hidden');
		$('.quote').removeClass('hidden');
		$('.congrats').addClass('hidden');
	});
	$('.tease_three').click(function(){
		$('.tease_three').addClass('hidden');
		$('.tease_roll').removeClass('hidden');
		$('.spinning_dave').removeClass('hidden');
		$('.quote').addClass('hidden');
	});

});