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
pg_query("insert into doctor(name,specail,qualification,phone)values('$docname','$docspe','$docqual','$docphone')");
header("location:doctor.php");

}

?>
<form method="post">
<table border=2px;>
<tr>
<td>
name
</td>
<td>
<input type="text" name="docname" >
</td>
</tr>


<tr>
<td>
qualification
</td>
<td>
<input type="text" name="docqual">
</td>
</tr>

<tr>
<td>
specilization
</td>
<td>
<input type="text" name="docspe">
</td>
</tr>

<tr>
<td>
phone
</td>
<td>
<input type="text" name="docphone">
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


