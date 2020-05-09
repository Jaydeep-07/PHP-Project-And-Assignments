<?php
	$email = $_POST['email'];
	$pos = strpos($email,'@');
	if($pos === false)
		echo "Email id $email doesn't contain @ symbol<br>";
	else
		echo "Email ID: $email<br>";
?>
<a href='email_check.html'>Go Back</a>

