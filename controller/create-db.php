<?php
	// reson for create-bd is to query the database
	// no closing tag needed
 require_once(__DIR__ . "/../modal/config.php");
 	// see blog.php to see my comments about require_once and __DIR__

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

