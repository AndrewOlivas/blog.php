<?php
	// require_once is to bring onto this one
	// __DIR__ is the directory of the files
	require_once(__DIR__ . "/controller/login-verify.php");
	require_once(__DIR__ . "/view/header.php");
	if (authenticateUser()) {	
		require_once(__DIR__ . "/view/navigation.php");
	}
	require_once(__DIR__ . "/view/body.php");
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");

?>

