<?php
	require_once('config.php');
	
	if(isset($_GET['id'])){
		$file_id=$_GET['id'];
		$sql="SELECT * FROM files WHERE id='$file_id';";
		$result=mysqli_query($conn,$sql);
		$files=mysqli_fetch_assoc($result);
	}
	
	if(isset($_POST['delete'])){
		$delete_id=$_POST['delete_id'];
		$delete_sql="DELETE FROM files WHERE id='$delete_id'";
		$delete_result=mysqli_query($conn,$delete_sql);
		if($delete_result){
			header('Location:viewfiles.php');
		}else{
			echo "File Not Found!".mysqli_error($conn);
		}
	}else{
?>
<!DCOTYPE html>
<html>
<head>
	<title>php7</title>
</head>
<body>
	<h1>Delete File</h1>
	<?php
		echo "You Sure Delete file {$files['file_name']} ?<br>";
		echo "<form action='deletefile.php' method='POST'>";
		echo "<input type='hidden' name='delete_id' value='{$files['id']}'>";
		echo "<button type='submit' name='delete'>Yes,Delete</button><br>";
		echo "<a href='filedetail.php?id={$files['id']}'>Cancel</a>";
		echo "</form>";
	?>
</body>
</html>
<?php
	}
?>