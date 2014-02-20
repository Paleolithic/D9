<!DOCTYPE html>
<html lang="en">

<?php $name="comment"; ?>
<?php include 'assets/includes/head.php'; ?>
<script type='text/javascript' src='assets/scripts/validate.js'></script>

<body>
	<?php

		$data = file('assets/includes/credentials.txt');
		$u = trim($data[0]);
		$p = $data[1];
		$con=mysql_connect("localhost",$u,$p)
			or die("couldn't connect: ".mysql_error());

		mysql_select_db("School");


		//stop sql injections for $_GET
		foreach($_GET as $key=>$val) {
			//additionally would probably want to sanitize as well
			$_GET[$key] = mysql_real_escape_string($val);
		}
		//stop sql injections for $_POST
		foreach($_POST as $key=>$val) {
			//additionally would probably want to sanitize as well
			$_POST[$key] = mysql_real_escape_string($val);
		}
		
		if (isset($_GET['Name']) &&
		    isset($_GET['Email']) &&
		    isset($_GET['Comment']) && 
		    $_GET['Name']    != '' &&
		    $_GET['Email']   != '' && 
		    $_GET['Comment'] != ''
		    ) {

			//build query and insert info into the db
		    //$query = "insert into comments values ('', '".$_GET['Name']."' , '".$_GET['Email']."' , '".$_GET['Comment']."')";

			$query = "insert into comments (name, email, comment) VALUES ('".$_GET['Name']."' , '".$_GET['Email']."',
		      '".$_GET['Comment']."')";

		    //echo "<p>$query</p>";
		    $res = mysql_query($query);
		    //var_dump($query,$res,mysql_error());

		    //echo "<h2>Data Saved!</h2>"; 
	    
	    } else {
			//echo '<h2 style="color:red">You entered no or bad data</h2>';
		}	

		//mysqli_close($con);
	?>

	<?php include 'assets/includes/nav.php'; ?>
	<div id="mask">
		<section data-speed="10" data-type="background" class='item' style='margin-top: 65px;' id="one">
			<div class='container'>
				<div class='seven columns offset-by-two title' style='padding-top: 35px;'><h2><a style='color: white; !important' href='#one'>Leave a Comment</a></h2></div>
				<div class='eight columns offset-by-four'>
					<form name="submitForm" method="GET" action="comment.php" onsubmit="return validate()">
			 			<label for="regularInput" id="name">Name</label>
				 		<input type="text" id="nameInput" name='Name' value="Enter your name..."/>
				 		<label for="regularInput" id="email">Email</label>
						<input type="text" id="emailInput" name='Email' value="Enter your email..." />
						<label for="regularTextArea" id="comment">Comment</label>
						<textarea id="commentInput" name="Comment">Leave a comment!</textarea>
				 		<button type="submit">Submit Form</button>
					</form>
				</div>
				<div class="six columns offset-by-five" style='margin-top: 60px;'>
					<a href='#comments'><h4>View Comments</h4><img src='assets/images/down.png' alt='Down arrow'/></a>
				</div>
			</div>
		</section>
		<section class='item' id="comments">
			<div class='container'>
				<div class='seven columns offset-by-two title' style='padding-top: 35px;'><h2><a href='#one'>Comments</a></h2></div>
				<?php

					$con=mysql_connect("localhost",$u,$p)
						or die("couldn't connect: ".mysql_error());

					mysql_select_db("School");
					
					$Query = "select * from comments"; // set query to get everything from the db 
					$v_TheResult = mysql_query ($Query); 


					if ($v_TheResult) {
					    while ($v_row = /*mysql_fetch_assoc*/mysql_fetch_array ($v_TheResult)) {
					        //$v_records[] = $v_row;
					        $v_result .= "<div class='ten columns offset-by-three' id='actComment'>";
						        $v_result .= "<div>";
							        $v_result .=  "<h3>" . $v_row['name'] . "</h3>";
							        $v_result .=  "<h6>Email: " . $v_row['email'] . "</h6>";
							        $v_result .=  "<p>"  . $v_row['comment'] . "</p>";
						        $v_result .= '</div>';
					        $v_result .= '</div>';
					    }
					}

					echo $v_result;

				?>
			</div>
		</section>
	</div>
</body>
</html>
