<?php
	require_once(__DIR__ . "/../modal/config.php");
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/phpmain.css">	
</head>


<!-- since its view, it should only be html -->
<link href='http://fonts.googleapis.com/css?family=Cabin:700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/phpmain.css">
<h1 style="margin-left: 40%;"> Create Blog Post </h1>

<!-- send infromation to input host -->
<form method="post" action="<?php echo $path . "controller/create-host.php" ?>" style="margin-left: 40%;">

<style type="text/css">
	body{
		background-image:url(img/cat-wp.jpg);
		background-repeat:no-repeat;

   background-size:cover;

   background-repeat:no-repeat;

   -webkit-background-size:cover;

   -moz-background-size:cover;

   -o-background-size:cover;

   background-size:cover;

   background-position:center;
	}
	h1   {color:blue}
Custom, iPhone Retina 
@media (max-width : 375px) and (max-width: 482px) {
	html,body {
		background-color: grey;
	}
}

Small Devices, Ipads 
@media (min-width : 768px) and (max-device-width: 1080px) {
	html,body{
		background-color: aliceblue;
	}
}

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