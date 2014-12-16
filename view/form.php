<?php
	require_once(__DIR__ . "/../modal/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()) {
// redirects unlogged in user
		header("Location: " . $path . "blog.php");
		die();
	}
?>

<!-- since its view, it should only be html -->
<link href='http://fonts.googleapis.com/css?family=Cabin:700italic' rel='stylesheet' type='text/css'>
<h1 style="margin-left: 40%;"> Create Blog Post </h1>

<!-- send infromation to input host -->
<form method="post" action="<?php echo $path . "controller/create-host.php" ?>" style="margin-left: 40%;">

<style type="text/css">
	h1   {color:blue}
	body{
		background-color: aliceblue;
	}
</style>

<form>
	<div>
		<!-- labels have to be the names of the the code in create-db.php on line 30 -->
		<label for "title">Title: </label>
		<input type="text" name="title" />
	</div>
	<br>
	<div>
		<label for""post>Post: </label>
		<textarea name="post"></textarea>
	</div>

	<div>
		<!-- submit sends it data to phpmyadmin -->
		<button type="submit">Submit</button>
	</div>
</form>