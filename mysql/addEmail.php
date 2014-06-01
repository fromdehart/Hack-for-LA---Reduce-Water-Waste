<?php 
//make SQL connection
	include '../db_connect.php';	

	$id = $_POST['id'];
	$email = $_POST['email'];
	$issueID = $_POST['issueID'];
	 	 
	$sql = "UPDATE users SET email='$email' WHERE id = \"$id\"";
	mysql_query($sql) or die(mysql_error());
	
	
	$sql2 = "UPDATE issues SET notifyUser='1' WHERE id = \"$issueID\"";
	mysql_query($sql2) or die(mysql_error());
		
	echo "good";
	
?>