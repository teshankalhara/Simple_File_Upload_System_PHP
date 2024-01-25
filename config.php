<?php
	$serverName = "localhost:3307";
	$userName = "root";
	$password = "";
	$dbName = "mydb4";
	
	$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	
	if(!$conn){
		die("Connection Error".mysqli_connect_error());
	}