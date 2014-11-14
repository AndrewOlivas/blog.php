<?php
// every time you want to create a new class, you have to put class followed by Database
class Database {
	// private makes it only accessed by this file
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	// created variables, global, etc.
	// public makes it able to be seen by other files
	public function __construct($host, $username, $password, $database) {
	// $this is to reference an instance of a class from within itself
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	// opens connection to create-db.php
	public function openConnection() {

	}
	// closes connection to create-db.php
	public function closeConnection() {

	}
	// makes the query public
	public function query($string) {


	}
}	