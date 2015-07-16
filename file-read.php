<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Open</title>
</head>
<body>
	<?php 
		$file = 'filetest.txt';
		if ($handle = fopen($file, 'r')) { //read
		 $content =	fread($handle, 6); //each character is one byte
		 fclose($handle);
		}

		echo $content. "<br>";
		echo "<hr>";
		echo nl2br($content). "<br>";

		// use fileside() to read the hwole file
		$file = 'filetest.txt';
		if($handle = fopen($file, 'r')) { // read
			$content = fread($handle, filesize($file));
			fclose($handle);
		} 
		echo "<hr>";
		echo nl2br($content). "<br>";
		echo "<hr>";
		// file_get_contents:  shortcut for fopen/fread/fclose
		// overwrites existing gile by default(Be careful)

		$content = file_get_contents($file);
		echo nl2br($content);
		echo "<hr>";

		// incremenatl reading
		$content = "";
		$file = 'filetest.txt';
		if ($handle = fopen($file, 'r')) { //read
		 while(!feof($handle)) {
		 $content .=	fgets($handle); //each character is one byte
		 	}
		 	fclose($handle);
		 	echo $content. "<br>";
		}
	 ?>
</body>
</html>