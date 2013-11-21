

$(document).ready(function() {


	for(var i =0; i < $('#current li a').length; i++){

		if($('#current li a')[i].hash ==window.location.hash){
			console.log($('#current li a')[i].hash);
			console.log(window.location.hash);
			$('#current li a').eq(i).css('background-color', 'white');
		}
	};


	$('#wrapper').scrollTo(window.location.hash, 800);

	$('a.panel').click(function () {
		
		$('a.panel').removeClass('selected');
		$(this).addClass('selected');
		
		current = $(this);

		$('#wrapper').scrollTo($(this).attr('href'), 800);	
		$('a.panel').css('background-color', 'rgba(0,0,0,0)');	
		$(this).css('background-color', 'white');
		return false;
	});


	$(window).resize(function () {
		resizePanel();
	});

	resizePanel();
});


function resizePanel() {

	width = $(window).width();
	height = $(window).height();

	mask_width = width * $('.item').length;
		
	$('#debug').html(width  + ' ' + height + ' ' + mask_width);
		
	$('#wrapper, .item').css({width: width, height: height});
	$('#mask').css({width: mask_width, height: height});
	$('#wrapper').scrollTo($('a.selected').attr('href'), 0);
		
}