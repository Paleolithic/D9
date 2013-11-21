$(document).ready(function(){    
	var allPanels = $('.accordion > dd').hide();
	
	/*setTimeout(function(){*/$('#start').next().slideDown();//},300);

	var allPanels = $('.accordion > dd').hide();

	$('.accordion > dt' ).click(function() {
	  allPanels.slideUp();
  	  $(this).next().slideDown();

  	  return false;
	});



});

