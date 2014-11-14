<?php
	require_once(__DIR__ . "/../modal/config.php");
?>

<style type="text/css">
		html { 
     background: url(img/ironman-wp.jpg) no-repeat center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
}

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

	a:link {
    color: #000000;
}

}
</style>

<nav>
	<ul>
		<!-- since $path = /_blog.php/, you can just put any file as seen below with post and it will direct you there -->
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>