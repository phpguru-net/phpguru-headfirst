<?php
echo "PHPGURU : DB002 - Connect Database with mysqli - procedure";

const SERVER_NAME = '127.0.0.1';
const USER_NAME = 'root';
const PASSWORD = '123456';

// create connection
$connection = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD); // resource datatype

var_dump($connection);

// check connection
if(!$connection){
	die('Connection failed' . mysql_error());
}

echo "Connected successfull!";

mysqli_close($connection);