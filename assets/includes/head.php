<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>District 9</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/test.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,700' rel='stylesheet' type='text/css'>

	<script type='text/javascript' src='assets/js/jquery-1.3.1.min.js'></script>
	<script type='text/javascript' src='assets/js/slider.js'></script>
	<script type='text/javascript' src='assets/js/jquery.scrollTo.js'></script>
	<script type="text/javascript" src="assets/js/jquery.color-RGBa-patch.js"></script>
	<script type='text/javascript' src='assets/js/pageMover.js'></script>
	<script>
	       $(document).ready(function(){
	            $("#the_lights").fadeTo(1,0);
	            $("#soft").click(function () {
	                 document.getElementById("the_lights").style.display="block";
	                 $("#the_lights").fadeTo("slow",0.8);
	            });
	            $("#turnon").click(function () {
	                 document.getElementById("the_lights").style.display="block";
	                 $("#the_lights").fadeTo("slow",0);
	            });
	       });
	</script>	
</head>