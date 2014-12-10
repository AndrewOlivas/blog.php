<?php
	// reson for create-bd is to query the database
	// no closing tag needed
 require_once(__DIR__ . "/../modal/config.php");
 	// see blog.php to see my comments about require_once and __DIR__

 $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	. "title varchar (255) NOT NULL,"
	. "post text NOT NULL,"
	. "DateTime datetime NOT NULL,"
	. "PRIMARY KEY (id))");
 	// NOT NULL means that it will have to show something and will not show nothing

 if ($query) {
	echo "<p>Successfully created table: posts</p>";
	// note: wont come up again, same as line 18!!!
 }
 else {
 	// cant use session with quotes 
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
	// same as line 8 and 9
 }
    // creates database for users
 	// salt is used to create more security from hackers
 $query = $_SESSION["connection"]->query("CREATE TABLE users ("
 	. "id int(11) NOT NULL AUTO_INCREMENT,"
 	. "username varchar(30) NOT NULL,"
 	. "email varchar(50) NOT NULL,"
 	. "password char(128) NOT NULL,"
 	. "salt char(128) NOT NULL,"
 	. "PRIMARY KEY (id))");

if ($query) {
	echo "<p>Successfully created table: users</p>";
}
else {
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}


