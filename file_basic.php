<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	 echo __FILE__."<br>";
	 echo __LINE__."<br>";
	 echo dirname(__FILE__)."<br>";
	 echo __DIR__."<br>";
	 echo "<hr>";
	 echo file_exists(__FILE__) ? 'yes': 'no';
	 echo "<br>";
	 echo file_exists(dirname(__FILE__)."/basic.php") ? 'yes' : 'no';
	 echo "<br>";
	 echo file_exists(dirname(__FILE__)) ? 'yes' : 'no';
	 echo "<br>";
	 echo is_file(dirname(__FILE__)."/basic.php") ? 'yes' : 'no';
	 echo "<br>";
	 echo is_file(dirname(__FILE__)) ? 'yes' : 'no';
	 echo "<br>";
	 echo is_dir(dirname(__FILE__)."/basic.php") ? 'yes' : 'no';
	 echo "<br>";
	 echo is_dir(dirname(__FILE__)) ? 'yes' : 'no';
	 echo "<br>";
	 echo is_dir('..') ? 'yes' : 'no';

	?>
</body>
</html>