<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Directories</title>
</head>
<body>
	<?php 
		echo getcwd(). "<br>";

		//mkdir

		mkdir('new', 0777); //0777 is the php default

		// recursive dir creation
		mkdir('new/test/test2', 0777, true);
		chdir('new');
		echo getcwd(). "<br>";

		rmdir('test/test2')
	 ?>
</body>
</html>