<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Open</title>
</head>
<body>
	<?php 
		$file = 'filetest.txt';
		if ($handle = fopen($file, 'w')) { //overwrite
			
			fwrite($handle, 'Shit nigga, I\'m writing shit'); //Return number of bytes or false
			$pos = ftell($handle);
			fseek($handle, $pos-6);
			fwrite($handle, "at 6");
			rewind($handle);
			fwrite($handle, "At beginning..");
			fclose($handle);
		} else {
			echo "Could not open file for writing!";
		}
		  // beware it will overtype
		// note: a and a+ will not let you move the pointer
	 ?>
</body>
</html>