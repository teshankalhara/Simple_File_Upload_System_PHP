<?php
	require_once('config.php');
	$file_id=$_GET['id'];
	$sql="SELECT * FROM files WHERE id='$file_id';";
	$result=mysqli_query($conn,$sql);
	$files = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>php7</title>
</head>
<body>
	<h1>File Detail</h1>
	<?php
		if($files){
			echo "<img src='./{$files['file_path']}' width='200'><br>";
			echo "File Name : {$files['file_name']}<br>";
			echo "File Path : {$files['file_path']}<br>";
			echo "File Upload Date : {$files['upload_date']}<br>";
			echo "<a href='deletefile.php?id={$files['id']}'>Delete</a><br>";
		}else{
			echo "File Not Found!";
		}
	?>
	<a href="viewfiles.php">Back to View Files</a>
</body>
</html>