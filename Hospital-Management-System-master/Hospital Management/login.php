
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
session_start();
if(isset($_POST["log"]))
{
extract($_POST);

$q=pg_query("select * from tbluser where email='$txtemail' and password='$txtpass'");
if(pg_num_rows($q)>0)
{
$_SESSION["email"]=$txtemail;
$q1=pg_query("select * from tbluser where email='".$_SESSION["email"]."'");
$rr=pg_fetch_array($q1);
extract($rr);
$_SESSION["name"]=$uname;
$_SESSION["id"]=$uid;
header("location:index.php");
}
else
{
?>
<script>
alert("INVALID CREDENTIALS");
</script>
<?php
}


}




if(isset($_POST["createacc"]))
{
header("location:create.php");

}


?>

<html>
<fieldset><legend><font color="red"><u><b>LOG-IN</b></u></font></legend>
<table>
<form method="post">
<tr>
<td>
Enter the email
</td>
<td>
<input type="email" name="txtemail" style="background-color:#00FFFF" placeholder="example@gmail.com">
</td>
</tr>
<tr>
<td>
Enter the pasword
</td>
<td>
<input type="password" name="txtpass" style="background-color:#00FFFF">
</td>
</tr>
<tr>
<td>
<input type="submit" name="log" value="Log In" style="background-color:#00FFFF">
</td>
</tr>
<tr>
<td>
IF YOU DONT HAVE AN ACCOUNT
</td>
<td>
<input type="submit" name="createacc" value="create new Account" style="background-color:#00FFFF">
</td>
</tr>
</table>
<?php include("footer.php");?>
</body></fieldset>
</html>


