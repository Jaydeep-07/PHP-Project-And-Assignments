<?php
	$fp = fopen('contact.dat','r');

	$str = "<table border=1>".
	       "<tr><th>Sr. No.</th><th>Name</th><th>Residence No.</th><th>Mob.
no.</th><th>Relation</th></tr>";

	while($row = fscanf($fp,"%s %s %s %s %s"))
	{
		$str.="<tr>";
		foreach($row as $r)
		{
			$str.="<td>$r</td>";
		}
		$str.="</tr>";
	}
	$str.="</table>";

	fclose($fp);

	echo $str;
?>
