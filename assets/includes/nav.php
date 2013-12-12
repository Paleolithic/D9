<!--div id="bg"><img src='assets/images/background.png' alt='nav image!'/></div-->
<div id='header'>
	<div class='container'>
		<div class='five columns' >
			<h1><a href='projects.html'>District 9</a></h1>
		</div>
		<div id="nav" class="eleven columns">
	    	<ul>
		        <li><a href="index.php" <?php if ($name=="home") echo " id='current'";?> >Home</a></li>
		        <li><a href="about.php" <?php if ($name=="about") echo " id='current'"; ?>>About</a></li>
		        <li><a href="production.php" <?php if ($name=="production") echo " id='current'"; ?>>Production</a></li>
		        <li><a href="reception.php" <?php if ($name=="reception") echo " id='current'"; ?>>Reception</a></li>
	    	</ul>
	    </div>
	</div>
</div>
