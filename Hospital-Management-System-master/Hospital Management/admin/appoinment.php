
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

<?php
if(isset($_POST["adddoc"]))
{
header("location:adddoctor.php");
}
?>

<table border=5px;>
<tr>
<td>
name
</td>
<td>
specail
</td>
<td>
qualification
</td>
<td>
phone
</td>
</tr>

<?php

$q=pg_query("select * from doctor");

while($r=pg_fetch_array($q))
{
extract($r);

?>
<tr>
<td>
<?php echo $name;?>
</td>

<td>
<?php echo $specail;?>
</td>

<td>
<?php echo $qualification;?>
</td>

<td>
<?php echo $phone;?>
</td>

<td>
<a href="confirm.php?id=<?php echo $did;?>"><input type="button" name="confirm" value="confirm"></a>
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


