<?php
	function disp_vowels($s)
	{
		$n = strlen($s);
		$count=0;
		for($i=0;$i<$n;$i++)
		{
			$e = $s[$i];
			if($e=='a' || $e=='e' || $e=='i' || $e=='o' || $e=='u' ||
				$e=='A' || $e=='E' || $e=='I' || $e=='O' || $e=='U')
			{
				echo "\$s[$i]=$s[$i]<br>";
				$count++;
			}
		}
		return $count;
	}

	$s = $_POST['str'];
	$n = disp_vowels($s);
	echo "No.of vowels = $n";
?>
