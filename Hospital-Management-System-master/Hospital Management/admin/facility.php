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
if(isset($_POST["save"]))
{
extract($_POST);
pg_query("insert into facility(type,charges,roomnm)values('$txtfac','$txtchar','$txtroom');");
echo"facility added";

}

?>
<form method="post">
<Table border=5px;>
<tr>
<Td>
facility type
</td>
<td>
<input type="text" name="txtfac">
</td>
</tr>

<tr>
<Td>
charges
</td>
<td>
<input type="text" name="txtchar">
</td>
</tr>

<tr>
<Td>
room number 
</td>
<td>
<input type="text" name="txtroom">
</td>
</tr>
<tr>
<td>
<input type="submit" name="save" value="submit">
</td>
</tr>

</table>

</form>

<?php include("footer.php");?>
</body>
</html>
