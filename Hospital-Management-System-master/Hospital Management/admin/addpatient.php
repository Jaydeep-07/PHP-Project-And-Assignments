<html>
<title>
</title>
<head>
<?php include("head.php");?>
</head>
<body> 
<?php include("header.php");?>
<?php include("menu.php");?>
<?php 

if(isset($_POST["submit"]))
{
extract($_POST);
pg_query("insert into patient(name,address,sex,room_number,phone,diseases)values('$pname','$padd','$psex','$pnum','$pphone','$pdis')");
//header("location:doctor.php");

}

?>

<form method="post">
<table border=2px;>
<tr>
<td>
patient name
</td>
<td>
<input type="text" name="pname" >
</td>
</tr>


<tr>
<td>
address
</td>
<td>
<input type="text" name="padd">
</td>
</tr>

<tr>
<td>
sex
</td>
<td>
<input type="text" name="psex">
</td>
</tr>


<tr>
<td>
room number
</td>
<td>
<input type="text" name="pnum">
</td>
</tr>
<tr>
<td>
phone
</td>
<td>
<input type="text" name="pphone">
</td>
</tr>

<tr>
<td>
diseases
</td>
<td>
<input type="text" name="pdis">
</td>
</tr>


<tr>
<td>
<input type="submit" name="submit" value="submit">
</td>
</tr>
</table>
</form>





<?php include("footer.php");?>
</body>
</html>


