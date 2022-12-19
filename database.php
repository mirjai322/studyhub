<?php

//what is this section for ??
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = ""; // how does this assist with error handling ??

$mysqli = new mysqli($host, $username, $password, $dbname);
 
if($mysqli->connect_errno){ //not too sure about this block of code -- what it is doing and what it means.
	die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;