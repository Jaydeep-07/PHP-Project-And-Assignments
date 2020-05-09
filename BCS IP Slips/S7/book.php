<?php
	$doc = new DOMDocument("1.0");
	$doc->formatOutput = true;

	$root = $doc->createElement("BookStore");
	$root = $doc->appendChild($root);

	$root1 = $doc->createElement("Books");
	$root1 = $root->appendChild($root1);

	$php = $doc->createElement("PHP");
	$php = $root1->appendChild($php);

	$title = $doc->createElement("Title");
	$title = $php->appendChild($title);

	$text = $doc->createTextNode("Programming in PHP");
	$text = $title->appendChild($text);

	$pub = $doc->createElement("Publication");
	$pub = $php->appendChild($pub);

	$text = $doc->createTextNode("O'RELLY");
	$text = $pub->appendChild($text);


	$php = $doc->createElement("PHP");
	$php = $root1->appendChild($php);

	$title = $doc->createElement("Title");
	$title = $php->appendChild($title);

	$text = $doc->createTextNode("Beginners PHP");
	$text = $title->appendChild($text);

	$pub = $doc->createElement("Publication");
	$pub = $php->appendChild($pub);

	$text = $doc->createTextNode("WORX");
	$text = $pub->appendChild($text);

	$doc->save("Book.xml");
?>
