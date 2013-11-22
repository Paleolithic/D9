<dl class="accordion">
	<dt <?php if($name=="index") echo "id='start'"; ?>><a href="">Welcome</a></dt>
	<dd>
	<ul>
		<li><a <?php if($name=="index") echo "a style='background-color: white;'"; ?> href='index.php'>Home</a></li>
	</ul>	
	</dd>

	<dt <?php if($name=="about") echo "id='start'"; ?>><a href="">About Movie</a></dt>
	<dd <?php if($name=="about") echo "id='current'"; ?>>
	<ul>
		<li><a <?php if($name=="about"){echo "class='panel' href='#item1'";} else {echo "href='about.php#item1'";} ?>>Plot</a></li>
		<li><a <?php if($name=="about"){echo "class='panel' href='#item2'";} else {echo "href='about.php#item2'";} ?>>Cast</a></li>
		<li><a <?php if($name=="about"){echo "class='panel' href='#item3'";} else {echo "href='about.php#item3'";} ?>>Themes</a></li>
	</ul>
	</dd>

	<dt <?php if($name=="production") echo "id='start'"; ?>><a href="">Production</a></dt>
	<dd <?php if($name=="production") echo "id='current'"; ?>>
	<ul>
		<li><a <?php if($name=="production"){echo "class='panel' href='#item1'";} else {echo "href='production.php#item1'";} ?>>Development</a></li>
		<li><a <?php if($name=="production"){echo "class='panel' href='#item2'";} else {echo "href='production.php#item2'";} ?>>Filming</a></li>
		<li><a <?php if($name=="production"){echo "class='panel' href='#item3'";} else {echo "href='production.php#item3'";} ?>>Visual Effects</a></li>
	</ul>
	</dd>

	<dt <?php if($name=="reception") echo "id='start'"; ?>><a href="">Reception</a></dt>
	<dd <?php if($name=="reception") echo "id='current'"; ?>>
	<ul>
		<li><a <?php if($name=="reception"){ echo "class='panel' href='#item1'";} else {echo "href='reception.php#item1'";} ?>>Profit</a></li>
		<li><a <?php if($name=="reception"){ echo "class='panel' href='#item2'";} else {echo "href='reception.php#item2'";} ?>>Reviews</a></li>
		<li><a <?php if($name=="reception"){ echo "class='panel' href='#item3'";} else {echo "href='reception.php#item3'";} ?>>Controversy</a></li>
	</ul>
	</dd>
</dl>