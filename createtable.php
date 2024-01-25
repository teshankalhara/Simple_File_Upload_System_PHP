<?php
	require_once('config.php');
	
	$sql = "CREATE TABLE IF NOT EXISTS files(
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		file_name VARCHAR(255),
		file_path VARCHAR(255),
		upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	);";
	
	$result = mysqli_query($conn, $sql);
	
	if(!$result){
		echo "Create Table Error".mysqli_error($conn);
	}else{
		echo "Create Table Ok!";
	}