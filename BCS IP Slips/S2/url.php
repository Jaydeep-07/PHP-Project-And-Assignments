<?php
	$url = 'http://www.example.com/php-example/index.php';
	$info = parse_url($url);

	echo "<b>Scheme:</b>".$info['scheme']."<br>";
	echo "<b>Host:</b>".$info['host']."<br>";
	echo "<b>Path:</b>".$info['path'];
?>


