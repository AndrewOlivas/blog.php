<?php
	require_once(__DIR__ . "/../modal/config.php");
?>

<style type="text/css">
	body{
		background-image:url(img/ironman-wp.jpg);
		background-repeat:no-repeat;

   background-size:cover;

   background-repeat:no-repeat;

   -webkit-background-size:cover;

   -moz-background-size:cover;

   -o-background-size:cover;

   background-size:cover;

   background-position:center;
	}
	/* visited link */
    a:visited {
    color: 	#000000;
}
</style>

<nav>
	<ul>
		<!-- since $path = /_blog.php/, you can just put any file as seen below with post and it will direct you there -->
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>