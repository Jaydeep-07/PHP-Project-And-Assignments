<?php
	$str = $_POST['str'];
	$op = $_POST['op'];

	$stack = array('Red','Blue','Green','White','Black');

	switch($op)
	{
	case 1:
		echo "<b>Before Push:</b><br>";
		print_r($stack);
		array_push($stack,$str);
		echo "<br><b>After Push:</b><br>";
		print_r($stack);
		break;
	case 2:
		echo "<b>Before Pop:</b><br>";
		print_r($stack);
		$val = array_pop($stack);
		echo "<br><b>After Pop:</b><br>";
		print_r($stack);
		echo "<br><b>Popped Element:</b>$val";
	}
?>
