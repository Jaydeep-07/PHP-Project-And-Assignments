<?php
	$persons = array('Ram','John','Qadir','Avani','Arnav','Radha','Meera','Krishna');

	$search = $_POST['search'];
	$op = $_POST['op'];
	switch($op)
	{
	case 'in_array':
		if(in_array($search,$persons))
			echo "$search is present in array";
		else
			echo "$search is not present in array";
		break;
	case 'array_search':
		$k = array_search($search,$persons);
		if($k===false)
			echo "$search is not present in array";
		else
			echo "$search is present at position $k";
	}
?>
