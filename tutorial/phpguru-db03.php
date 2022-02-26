<?php
echo "PHPGURU : DB003 - Connect Database with PDO";

const SERVER_NAME = '127.0.0.1';
const USER_NAME = 'root';
const PASSWORD = '123456';
const DB_NAME = 'phpguru-headfirst';

// create connection
try{
	$connection = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DB_NAME, USER_NAME, PASSWORD);
	var_dump($connection);
	// set the PDO error mode to exception
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";	
} catch(PDOException $e) {
  	echo "Connection failed: " . $e->getMessage();
}

$connection = null;