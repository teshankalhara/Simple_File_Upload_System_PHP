<?php
	require_once('config.php');
	if(isset($_POST['upload'])){
		$file_name=$_FILES['file']['name'];
		$file_tmp=$_FILES['file']['tmp_name'];
		$file_path="./uploads/".$file_name;
		
		move_uploaded_file($file_tmp,$file_path);
		
		$sql = "INSERT INTO files (file_name,file_path) VALUES ('$file_name','$file_path');";
		
		if(mysqli_query($conn,$sql)){
			header('Location:viewfiles.php');
		}else{
			echo "Upload File Error".mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>php7</title>
</head>
<body>
	<h1>File Upload System</h1>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file" required>
		<button type="submit" name="upload">Upload</button>
	</form>
	<a href="viewfiles.php">View Files</a>
</body>
</html>