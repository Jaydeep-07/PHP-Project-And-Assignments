<?php
	echo "Client IP Address : " . $_SERVER['REMOTE_ADDR'] . "<br>";
	echo "Browser Detection / Information : " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
	echo "Page came from HTTPS?  ";
	if($_SERVER['HTTPS']!=='on')
		echo "No<br>";
	else
		echo "Yes<br>";
?>

