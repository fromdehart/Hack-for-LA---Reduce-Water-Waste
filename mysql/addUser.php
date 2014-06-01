<?php 
//make SQL connection
	include '../db_connect.php';	

	$id = $_POST['id'];
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$fbID = $_POST['fbID'];

	
	$sth = mysql_query("SELECT COUNT(*) FROM users WHERE id = $id");
	$idCheck = mysql_result($sth, 0);
	
	if ($idCheck[0] == 0 ) { 	 
		$sql = "INSERT INTO users (firstName, lastName, email, phone, fbID) VALUES ('$fName', '$lName', '$email', '$phone', '$fbID')";
		mysql_query($sql) or die(mysql_error());
		
		$userID = mysql_insert_id();
		echo $userID;
	} else {
		echo $id;
	}
?>