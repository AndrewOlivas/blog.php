<!-- to create a post and pushes it to online database -->
<?php
	// filter is to make sure nothing bad is put in
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";