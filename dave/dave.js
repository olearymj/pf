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

	var tease_array = ['.tease_roll_one', '.tease_roll_two', '.tease_roll_three', '.tease_roll_four', '.tease_roll_five', '.tease_roll_six', '.tease_roll_seven', '.tease_roll_eight'];

	var tease_no = Math.floor(Math.random()*7);
	var tease = tease_array[tease_no];

	//console.log(tease_array[0]);

	$('.tease_three').click(function(){
		$('.tease_three').addClass('hidden');
		$(tease).removeClass('hidden');
		$('.spinning_dave').removeClass('hidden');
		$('.quote').addClass('hidden');
	});



});