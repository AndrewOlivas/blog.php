<?php
	// no closing tag needed
 require_once(__DIR__ . "/../modal/config.php");
 	// see blog.php to see my comments about require_once and __DIR__

 $connection = new mysqli($host, $username, $password);
	 // Represents a connection between PHP and a MySQL database.
 	 // The order has to be like the database.php

 if($connection->connect_error){
	die("<p>Error: " . $connection->connect_error . "</p>");
	 //just in case it doesnt work it will show error

 }

 $exists = $connection->select_db($database);
 		// ! = false 
 if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database"); 

    if ($query) {
    	echo "<p>Successfully created database: " . $database . "</p>";
    	// note: this wont show up after the first one
    }
 }
 else {
	echo "<p>Database already exists</p>";
 }

 $query = $connection->query("CREATE TABLE posts ("
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	. "title varchar (255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
 	// NOT NULL means that it will have to show something and will not show nothing

 if ($query) {
	echo "<p>Successfully created table: posts</p>";
	// note: wont come up again, same as line 18!!!
 }
 else {
	echo "<p>$connection->error</p>";
	// same as line 8 and 9
 }

 $connection->close();