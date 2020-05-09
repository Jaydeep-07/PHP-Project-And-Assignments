<html>
<title>
</title>
<head>
<?php include("head.php");?>
</head>
<body>
<?php include("header.php");?>
<?php include("menu.php");?>
<Table border=5px;>
<tr>
<Td>
facility type
</td>
<Td>
charges
</td>
<Td>
room number 
</td>

</tr>
<?php 

$q=pg_query("select * from facility");
while($r=pg_fetch_array($q))
{
extract($r);

?>
<tr>
<td>
<?php echo $type;?>
</td>
<td>
<?php echo $charges;?>
</td>
<td>
<?php echo $roomnm;?>
</td>
<td>
<a href="addfacility.php?id=<?php echo $fid;?>"><input type="button" name="add" value="add"></a>

</tr>
<?php
}
?>



</table>



<?php include("footer.php");?>
</body>
</html>
