<?php
	$con=pg_connect("host=localhost dbname=ty1 port=5432 user=postgres");

	$cname=$_POST['cname'];
   
	$sql = "select student.sid,sname,class from student,competition,stud_comp where student.sid=stud_comp.sid and competition.cno=stud_comp.cno and rank=1 and cname='$cname'";

	$result=pg_query($sql);


	while($row=pg_fetch_array($result))
	{
		echo "<table border=2 align=center>";
		echo "<th>SID</th><th>Name</th><th>Class</th>";
		echo "<tr>";
		echo "<td>".$row['sid']."</td>";
		echo "<td>".$row['sname']."</td>";
		echo "<td>".$row['class']."</td>";
		echo "</tr>";
		echo "</table><br>";		
	}
?>
