<?php
	$op = $_POST['op'];
	$fname = $_POST['fname'];

	switch($op)	
	{
	case 1: 
		echo "File Type : ".filetype($fname)."</br>";
		break;
	case 2: 
		if(unlink($fname))
			echo "File $fname deleted successfully.</br>";
		else
			echo "Failed to delete file $fname.</br>";
	}
?>

