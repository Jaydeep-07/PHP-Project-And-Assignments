<?php
	$dom=new DomDocument();
	$dom->load("book.xml");
	$t=$dom->getElementsByTagName("Book_Title");
	echo "<b>Book Names:</b><br>";
	foreach($t as $node)
	{
		print $node->textContent."<br>";
	}

	$t=$dom->getElementsByTagName("Book_Author");
	echo "<b>Book Authors:</b><br>";
	foreach($t as $node)
	{
		print $node->textContent."<br>";
	}
?>
