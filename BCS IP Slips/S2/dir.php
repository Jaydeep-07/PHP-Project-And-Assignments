<?php
	$dname = $_POST['dir'];
	$ext = $_POST['ext'];

	$dh = opendir($dname);
	
	while(($fname=readdir($dh))!==false)
	{
		if(ereg($ext.'$',$fname))
			echo "$fname<br>";
	}

	closedir($dh);
?>
