<!DOCTYPE html>
<html lang="en">

<script> 
	var hash = window.location.hash;
	window.location.href = "nav.php?hash=" hash;
</script>
<?php $name="index"; ?>
<?php include 'assets/includes/head.php'; ?>

<body >
	<div id="bg"><img src='assets/images/top-nav-test.jpg' alt='nav image!'/></div>

	<?php include 'assets/includes/nav.php'; ?>

	<div id="wrapper">
	<div id="mask">
		<div id="item1" class="item">
			<div class="top">
				<p id="title1">District 9</p>
				<p id="title2"> District 9</p>
				
			</div>	
					
			<div id='standout' class='content' style='height: 600px; width: 35%; left: -16%;'>
				<ul>
					<li><a id='soft' href="#">Lights off</a></li>
					<li><a href='#' id='turnon'>Lights on</a></li>
				</ul>
				<iframe style='position: relative; margin: 14px;' width="94%" height="60%" src="http://www.youtube.com/embed/DyLUwOcR5pk" allowfullscreen></iframe>
				<a style='margin:0; padding:0; position: relative; top: -10px;' href='assets/css/style.css'>Css link</a>				
			</div>
			
		</div>
	</div>
	</div>
	<div id='the_lights'></div>
	<img id="sign" src="assets/images/sign_test_sign_only.png"  alt="Sign"/>
</body>
</html>
