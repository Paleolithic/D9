$(document).ready(function(){    

	function progressBar(percent, $element, caption) {
		var progressBarWidth = percent * $element.width() / 100;
		$element.find('div').animate({ width: progressBarWidth }, 500).html(caption +"&nbsp;");
	}
	var progressBars = new Array();
	progressBars[0] = "setTimeout(function(){progressBar(50, $('#college'), '50%');},1500); "
  	/*if(window.location.hash == '#item2')
  	{
 	  	setTimeout(function(){progressBar(90, $('#rt'), 'Rotten Tomatoes: 90%');},1500); 
		setTimeout(function(){progressBar(80, $('#imdb'), 'IMDB: 8/10');},1700); 
		setTimeout(function(){progressBar(81, $('#metacritic'), 'MetaCritic: 81%');},1900); 
  	}*/

  	$("#pb").click(function(){
 	  	setTimeout(function(){progressBar(90, $('#rt'), 'Rotten Tomatoes: 90%');},1500); 
		setTimeout(function(){progressBar(80, $('#imdb'), 'IMDB: 8/10');},1700); 
		setTimeout(function(){progressBar(81, $('#metacritic'), 'MetaCritic: 81%');},1900); 
	});
});