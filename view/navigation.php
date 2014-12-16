<?php
	require_once(__DIR__ . "/../modal/config.php");
?>

<style type="text/css">
	

</style>

<nav>
	<ul>
		<!-- since $path = /_blog.php/, you can just put any file as seen below with post and it will direct you there -->
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>

	</ul>
</nav>

<nav>
	<ul>
		
		<li><a href="http://localhost/_blog.php/login.php">Login</a></li>
		<li><a href="http://localhost/_blog.php/register.php">Register</a></li>

	</ul>
</nav>