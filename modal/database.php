<?php
// Classes are used for representing data as objects.
// calls functions from create-db 
// class Database has to have the same name as the file
class Database {
	// private makes it only accessed by this file, to hide code
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	public $error;
	// created variables, global, etc.
	// public makes it able to be seen by other files
	public function __construct($host, $username, $password, $database) {
	// $this is to reference an instance of a class from within itself
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

	// cut from create-db
	$this->connection = new mysqli($host, $username, $password);
	 // Represents a connection between PHP and a MySQL database.
 	 // The order has to be like the database.php

 	if($this->connection->connect_error){
		die("<p>Error: " . $this->connection->connect_error . "</p>");
	 //just in case it doesnt work it will show error

 	}

 	$exists = $this->connection->select_db($database);
 		// ! = false 
 		if (!$exists) {
    		$query = $this->connection->query("CREATE DATABASE $database"); 

    		if ($query) {
    	echo "<p>Successfully created database: " . $database . "</p>";
    	// note: this wont show up after the first one
    	}
    }
  
 	
 	else {
			echo "<p>Database already exists</p>";
 		}
 	}
	
	// opens connection to create-db.php
	public function openConnection() {
		$this->connection = new mysqli ($this->host, $this->username, $this->password, $this->database);
	
		if($this->connection->connect_error) {
			die("<p>Error: " . $this->connection->connect_error . "</p>");
		}
	}
	// ripped from create-db
 	// ends cut
	// closes connection to create-db.php
	public function closeConnection() {
		// to check whether or not youve opened a connection
		// isset is to check if there is information or not
		// if no info, it will make it null, so no need to close the connection
		// no need to call this variable if no info is there
		if (isset ($this->connection)) {
			$this->connection->close();
		}

	}
	// makes the query public
	// every time you call on our query function you have to pass it a string 
	// dont have to repeat yourself with this code,before you had to repeat five lines of code.
	public function query($string) {
	// open database,query the database, get results, close database.
		// this code is calling on a function
		$this->openConnection();
		// all info will be stored in $string
		$query = $this->connection->query($string);

		if (!$query) {
			$this->error = $this->connection->error;
		}

		$this->closeConnection();

		return $query;


	}
}	