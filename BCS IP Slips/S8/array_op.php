<?php
	$op = $_POST['op'];
	$input = array('Ram'=>35, 'Seeta'=>27, 'John'=>43, 'Mary'=>40, 'Qadir'=>23, 'Asma'=>30);

	switch($op)
	{
	case 1:
		echo '<b>Before Flip:</b>';
		print_r($input); 
		$flipped = array_flip($input);
		echo '<br><b>After Flip:</b>';		
		print_r($flipped);
		break;
	case 2: 
		echo '<b>Before Shuffle:</b>';
		print_r($input); 
		shuffle($input);
		echo '<br><b>After Shuffle:</b>';		
		print_r($input);
	}
?>

