<?php
	$con=pg_connect("host=127.0.0.1 dbname=ty1 port=5432 user=postgres");

	$sql = "insert into Dept(dname,location) values('Sales','Pimpri'),('Purchase','Chinchwad'),('Account','Pune Camp'),('Production','Chinchwad')";

	pg_query($con,$sql);

	$sql = "insert into Emp(ename,address,phone,salary,d_no) values('Ram','Pimpri','9823374979',4500,1), ('Seeta','Pimpri','9823374979',5500,1),('Radha','Chinchwad','9272651192',3500,2), ('Meera','Akurdi','9822290095',6500,3),('Krishna','Pune','9823374979',7500,4), ('Arnav','Pimpri','9823374979',6500,4), ('Avani','Pimpri','9823374979',8500,2)";

	pg_query($con,$sql);
	
	echo "Record inserted successfully.";
?>
