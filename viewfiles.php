<?php
	require_once('config.php');
?>
<!DCOTYPE html>
<html>
<head>
	<title>php7</title>
</head>
<body>
	<h1>File List</h1>
	<?php
		$sql="SELECT * FROM files";
		$result=mysqli_query($conn,$sql);

		while($files=mysqli_fetch_assoc($result)){
			echo "<li><a href='filedetail.php?id={$files['id']}'>{$files['file_name']}</a></li>";
		}
	?>
	<a href="index.php">File Upload</a>
</body>
</html>