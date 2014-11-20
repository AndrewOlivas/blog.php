<!-- to create a post and pushes it to online database -->
<?php
	// need to reach model folder for the query
	require_once(__DIR__ . "/../modal/config.php");
	
	// filter is to make sure nothing bad is put in
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	// runs a query in your database
	$query = $connection->query("INSERT INTO posts SET title = '$title',post = '$post'");
	
	// stores a true/false value, if false shows error
	if ($query) {
		echo "<p>Successfully inserted post :$title</p>";
	} 
	else {
		echo "<p>$connection->error</p>";
	}

