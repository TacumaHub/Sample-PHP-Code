<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Open</title>
</head>
<body>
	<?php 
		$filename = 'filetest.txt';
		echo filesize($filename) . "<br>"; // in bytes
		// filemtime: last modigied - changed content
		// filectime: last changed time -changed content or metadata
		//fileatime: last accessed 

		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br>";
		echo strftime('%m/%d/%Y %H:%M', filectime($filename)) . "<br>";
		echo strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br>";
		echo "<hr>";
		touch($filename); // update to current time
		echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br>";
		echo strftime('%m/%d/%Y %H:%M', filectime($filename)) . "<br>";
		echo strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br>";

		$path_parts = pathinfo(__FILE__);
		print_r($path_parts);
	 ?>

	 <?php 
	 	if (strstr($path_parts['filename'], "e")){
	 		echo "found e";
	 	}
	  ?>
</body>
</html>