<?php
	$con=pg_connect("host=127.0.0.1 dbname=ty1 port=5432 user=postgres");

	$dname=$_POST['dname'];

	$sql = "select max(salary),min(salary),sum(salary) from emp,dept where emp.d_no=dept.d_no and dname='$dname'";

	$result = pg_query($sql);

	$row = pg_fetch_row($result);
?>
<table border=1>
<tr>
	<th>Maximum Salary</th>
	<th>Minimum Salary</th>
	<th>Sum Salary</th>
<tr>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
</tr>
</table>
