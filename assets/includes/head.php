<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>District 9</title>
	<link rel="stylesheet" type="text/css" href="assets/css/test.css">
	<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,700' rel='stylesheet' type='text/css'>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script><style type="text/css"></style>
	<script type='text/javascript' src='assets/scripts/jquery.scrollTo.js'></script>
	<script type="text/javascript" src="assets/scripts/jquery.color-RGBa-patch.js"></script>
	<script type='text/javascript' src='assets/scripts/pageMover.js'></script>
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


       		$(window).resize(function(){
				$(".index").toggleClass("ten", $( window ).width() > 959);
       			$(".index").toggleClass("fourteen offset-by-one", $( window ).width() <= 959);
       		});


            $("#the_lights").fadeTo(1,0);
            $("#soft").click(function () {
                 document.getElementById("the_lights").style.display="block";
                 $("#the_lights").fadeTo("slow",0.8);
                 $("#the_lights").css('visibility','visible');
            });
            $("#turnon").click(function () {
                 document.getElementById("the_lights").style.display="block";
                 $("#the_lights").fadeTo("slow",0);
                 $("#the_lights").css('visibility','hidden');
            });
       

      		$(function() {

				// Find all YouTube videos
				var $allVideos = $("iframe"),

				    // The element that is fluid width
				    $fluidEl = $("#video");

				// Figure out and save aspect ratio for each video
				$allVideos.each(function() {

					$(this)
						.data('aspectRatio', this.height / this.width)
						
						// and remove the hard coded width/height
						.removeAttr('height')
						.removeAttr('width');

				});

				// When the window is resized
				// (You'll probably want to debounce this)
				$(window).resize(function() {

					var newWidth = $fluidEl.width();
					
					// Resize all videos according to their own aspect ratio
					$allVideos.each(function() {

						var $el = $(this);
						$el
							.width(newWidth)
							.height(newWidth * $el.data('aspectRatio'));

					});

				// Kick off one resize to fix all videos on page load
				}).resize();

			});

			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top -65
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});

       });
	</script>	
</head>