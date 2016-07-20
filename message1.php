<?php
	header("Content-Type: text/html; charset=utf-8");
	// extract($_POST);
	echo "message: " . $_POST["text-area"] . ";<br>";
	echo "email: " . $_POST["email"] . ";<br>";
?>