<?php 
//make SQL connection
	include '../db_connect.php';	

	$id = $_POST['id'];
	$location = $_POST['location'];
	$type = $_POST['type'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	
	if (strstr($location,'Latitude:') === false) {
		$addy = str_replace(" ", "+", $location);
		$url = 'http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address='.$addy; 
		$results = json_decode(file_get_contents($url),1); 
		$lat = $results[results][0][geometry][location][lat];
		$lng = $results[results][0][geometry][location][lng];
		echo $location;
	}
	 	 
		$sql = "INSERT INTO issues (userID, lat, lng, location, type) VALUES ('$id', '$lat', '$lng', '$location', '$type')";
		mysql_query($sql) or die(mysql_error());
		
		$issueID = mysql_insert_id();
		echo $issueID;
		
		$now = new DateTime();
		$time = $now->format('Y-m-d H:i:s'); 
		
		$message = "Location: " . $location . "\r\nType of Issue: " . $type . "\r\nTime of Day: " . $time;
		mail('mdehart1@gmail.com','New Water Waste Issue Reported',$message, "From: issue@floworking.com\n");
	
?>