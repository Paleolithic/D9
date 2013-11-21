<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body onload="init(files)">
	<div id="bg"><img src='assets/images/top-nav-test.jpg' alt='nav image!'/></div>

	<dl class="accordion">
		<dt id='start' ><a href="index.html">Welcome</a></dt>
		<dd><ul>
			<li><a style='background-color: white;' href='index.html'>Home</a></li>
		</ul>	
		</dd>

		<dt><a href="">About Movie</a></dt>
		<dd><ul>
			<li><a href='about.php#item1'>Plot</a></li>
			<li><a href='about.html#item2'>Cast</a></li>
			<li><a href='about.html#item3'>Themes</a></li>
		</ul>
		</dd>

		<dt><a href="">Production</a></dt>
		<dd><ul>
			<li><a href='production.html#item1'>Development</a></li>
			<li><a href='production.html#item2'>Filming</a></li>
			<li><a href='production.html#item3'>Visual Effects</a></li>
		</ul>
		</dd>

		<dt><a href="">Reception</a></dt>
		<dd><ul>
			<li><a href='reception.html#item1'>Profit</a></li>
			<li><a href='reception.html#item2'>Reviews</a></li>
			<li><a href='reception.html#item3'>Controversy</a></li>
		</ul>
		</dd>
	</dl>

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
