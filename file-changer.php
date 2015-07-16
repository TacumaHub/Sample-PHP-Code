<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	
	echo fileowner('file-permissions.php');
	echo "<br>";
	// if we have posix installed
	// $owner_id = fileowner('file-permissions.php');
	// $owner_array = posix_getpwuid($owner_id);
	// echo $owner_array['name'];
	echo decoct(fileperms('file-permissions.php'));
	echo "<br>";
	chmod('file-permissions.php', 0444);
	echo decoct(fileperms('file-permissions.php'));
	echo "<br>";
	echo is_readable('file-permissions.php') ? 'Yep' : 'Nope';
	echo "<br>";
	echo is_writable('file-permissions.php') ? 'Yep' : 'Nope';
	?>
</body>
</html>