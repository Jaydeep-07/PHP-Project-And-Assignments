<html>
<title>
</title>
<head>
<?php include("head.php");?>
</head>
<body>
<?php include("header.php");?>
<?php include("menu.php");?>

<table boder=5px;>
<tr>
<td>
charges
</td>
<td>
name
</td>
</tr>
<?php
$q=pg_query("select * from facility,addfacility where facility.fid=addfacility.fid");
while($r=pg_fetch_array($q))
{
extract($r);

?>
<tr>
<td>
<?php echo $charges;?>
</td>
<td>
<?php echo $type;?>
</td>
<td>
<?php 
$total=$total+$charges;

?>
</tr>
<?php
}
?>
</table>
<tr>
<td>
total
</td>
</tr>
<tr>
<td>
<?php echo $total;?>
</td>
</tr>






<?php include("footer.php");?>
</body>
</html>

