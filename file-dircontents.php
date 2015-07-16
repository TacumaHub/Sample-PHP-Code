<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Directories</title>
</head>
<body>
	<?php 
		$dir = ".";
		if(is_dir($dir)) {
			if($dir_handle = opendir($dir)) {
				while($filename = readdir($dir_handle)) {
					echo "file: {$filename}<br>";
				}
				closedir($dir_handle);
			}
		}

		echo "<hr>";
		// scandir(); reads all filesnames into an array

		if(is_dir($dir)) {
			$dir_array = scandir($dir);
				foreach($dir_array as $file) {
					if(stripos($file, '.') > 0) {
					echo "filename: {$file} <br>";
				}
			}
		}
	 ?>
</body>
</html>