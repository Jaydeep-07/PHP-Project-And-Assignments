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
uid
</td>
<td>
did
</td>
<td>
date
</td>
<td>
time
</td>
<td>
gender
</td>
</tr>

<?php

$q=pg_query("select * from apointt2 where flag=1");

while($r=pg_fetch_array($q))
{
extract($r);

?>
<tr>
<td>
<?php echo $uid;?>
</td>

<td>
<?php echo $did;?>
</td>

<td>
<?php echo $date;?>
</td>

<td>
<?php echo $time;?>
</td>

<td>
<?php echo $gender;?>
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


