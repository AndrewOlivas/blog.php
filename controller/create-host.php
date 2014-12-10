<!-- to create a post and pushes it to online database -->
<?php
		// need to reach model folder for the query
	require_once(__DIR__ . "/../modal/config.php");
	
		// filter is to make sure nothing bad is put in
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');
		// runs a query in your database
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title',post = '$post'");
	
		// stores a true/false value, if false shows error
	if ($query) {
		echo "<p>Successfully inserted post :$title</p>";
		// uppercase changes the format, from the first three letters to the 24 hour clock
		// you can change the format to 12/4/2014 to dec/thu 04/2014 by concatnating
		echo "Posted on: " . $date->format("m/d/Y") . " at " . $time->format("g:i");
	} 
	else {
		// have to cancate this because it will have error.
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

