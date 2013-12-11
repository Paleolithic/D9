<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Parallax Scrolling Tutorial</title>
	<meta name="description" content="How to create a parallax scrolling effect using jQuery, HTML5 and CSS3">
	<meta name="author" content="Mohiuddin Parekh, Nettuts+">
	<!-- CSS Code -->
	<style>
		/**
		 * Parallax Scrolling Tutorial
		 * For NetTuts+
		 *  
		 * Author: Mohiuddin Parekh
		 *	http://www.mohi.me
		 * 	@mohiuddinparekh   
		 */


		body{
			margin:0;
			padding:0;
		}


		#home { 
			background: url(assets/images/background.png) 50% 0 no-repeat fixed; 
			height: 1000px;  
			margin: 0 auto; 
		    width: 100%; 
		    max-width: 1920px; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		}
		#about { 
			background: url(assets/images/testhome.jpg) 50% 0 no-repeat fixed; 
			height: 1000px;
			margin: 0 auto; 
		    width: 100%; 
		    max-width: 1920px; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		}

		/* Introduction */

		#home article { 
			background:  no-repeat scroll center top transparent; 
			height: 458px; 
			position: absolute; 
			
			top: 291px; 
			width: 100%; 
		}

		#about article { 
			background:  no-repeat scroll center top transparent;
			height: 458px;
			position: absolute;
			
			top: 291px;
			width: 100%; 
		}

	</style>
	<!-- JS Code -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script><style type="text/css"></style>
	<script>
		$(document).ready(function(){
			// Cache the Window object
			$window = $(window);
		                
		   $('section[data-type="background"]').each(function(){
		     var $bgobj = $(this); // assigning the object
		                    
		      $(window).scroll(function() {
		                    
				// Scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!								
				var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
				
				// Put together our final background position
				var coords = '50% '+ yPos + 'px';

				// Move the background
				$bgobj.css({ backgroundPosition: coords });
				
		}); // window scroll Ends

		 });	

		});
	</script>
</head>

<body>
	<section id="home" data-speed="10" data-type="background">
		<article style="z-index: 1000;">I am Absolute Positioned</article>
	</section>  
	     
	<section id="about" data-speed="4" data-type="background">
		<article>Simple Parallax Scroll</article>
	</section> 
</body>
</html>