<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Open</title>
</head>
<body>
	<?php 
		$file = 'filetest.txt';
		if ($handle = fopen($file, 'w')) {
			fclose($handle);
		} else {
			echo "Could not open file for writing!";
		}
		
	 ?>
</body>
</html>