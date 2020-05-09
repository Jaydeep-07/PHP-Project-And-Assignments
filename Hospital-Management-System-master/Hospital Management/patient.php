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
if($_SESSION["email"]==null)
{
header("location:login.php");
}
else
{
?>

<table border=5px;>
<tr>
<td>
pno
</td>
<td>
name
</td>
<td>
address
</td>
<td>
sex
</td>
<td>
room number
</td>
<td>
phone
</td>
<td>
diseases
</td>
</tr>

<?php

$q=pg_query("select * from patient");

while($r=pg_fetch_array($q))
{
extract($r);

?>
<tr>
<td>
<?php echo $pno;?>
</td>

<td>
<?php echo $name;?>
</td>

<td>
<?php echo $address;?>
</td>

<td>
<?php echo $sex;?>
</td>

<td>
<?php echo $room_number;?>
</td>
<td>
<?php echo $phone;?>
</td>
<td>
<?php echo $diseases;?>
</td>
</tr>

<?php
}
?>
</table>
<?php
}
?>
<?php include("footer.php");?>
</body>
</html>


