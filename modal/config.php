<?php
	require_once(__DIR__ . "/database.php");
	session_start();
	// this will be the base for post.php, so it wont need to answer any more folders
	// will have to re direct all require_once in all files
	$path = "/_blog.php/";

	$host ="localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	// check if the variable is called session and if it does something
	if(!isset($_SESSION["connection"])){
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}