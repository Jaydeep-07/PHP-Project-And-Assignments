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

$a=$_GET["id"];
pg_query("insert into addfacility(fid)values('".$_GET["id"]."')");
echo"faclity added";

?>
<a href="bill.php?id=<?php echo $a;?>"><input type="button" name="ok" value="ok">

<?php include("footer.php");?>

</body>
</html>
