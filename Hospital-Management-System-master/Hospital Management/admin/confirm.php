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

pg_query("update apointt2 set flag=1 where did=$a");

?>

<?php include("footer.php");?>
</body>
</html>
