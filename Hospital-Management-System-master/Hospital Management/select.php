<html>
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
$b=$_SESSION["id"];
$c=$_GET["id"];



pg_query("insert into apointt2(date,time,gender,uid,did,flag)values('$txtdate','$txttime','$txtgender',$b,'".$_GET["id"]."',0);");

echo"your appoinmet is processing check your email after some time your confrim appoint is display";
}
?>
<form method="post">
<table border=5px;>
<tr>
<td>
date
</td>
<td>
<input type="text" name="txtdate">
</td>
</tr>
<tr>
<td>

<tr>
<td>
time
</td>
<td>
<input type="text" name="txttime">
</td>
</tr>

<tr>
<td>
Gender
</td>
<td>
<input type="text" name="txtgender">
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="submit">
</td>
</tr>
</form>
</table>


<?php include("footer.php");?>
</body>
</html>
