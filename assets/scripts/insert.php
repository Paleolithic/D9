<?php
	$data = file('../includes/credentials.txt');
	$con=mysql_connect("localhost",$data[0],$data[1])
		or die("couldn't connect: ".mysql_error());
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$sql="INSERT INTO comments(name) VALUES ('$_POST[name]')";
	$sql="INSERT INTO comments(email) VALUES ('$_POST[email]')";
	$sql="INSERT INTO comments(comment) VALUES ('$_POST[comment]')";


	mysql_select_db("tjb2597");

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
		echo '<h2 style="color:red">You entered no or bad data</h2>';
	}	

	exec("../../comment.php");
	//mysqli_close($con);
?>

