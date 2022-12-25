<?php

$host = "localhost"; //first column of db
$dbname = "login_db"; // second column of db
$username = "root"; // third column of db
$password = ""; //fourth column of db

$mysqli = new mysqli($host, $username, $password, $dbname);
 
if($mysqli->connect_errno){ 
	die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;