<?php

// server side validation
if(empty($_POST["name"])){
	die("Name is required");
}


if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
	die("Valid email is required");
}

if(strlen($_POST["password"])<8){
	die("Password must be a minimum of 8 characters");
}

if(!preg_match("/[a-z]/i", $_POST["password"])){ 
	die("Password must contain at least 1 letter");
}

if(!preg_match("/[0-9]/i", $_POST["password"])){
	die("Password must contain at least 1 number");
}

if($_POST["password"] !== $_POST["password_confirmation"]){
	die("Passwords must match");
}

//hash password
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init(); 

if(! $stmt->prepare($sql)){ 
	die("SQL error: " . $mysqli->error); //error property of sql object
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

try {
    $stmt->execute();
    header("Location: signup-success.html");
    exit;


}
catch (Exception $e) {
    echo $e->getMessage();
}

/* //display email already taken if it is duplicate entry in error field

if($mysqli->errorno === 1062){
	die("Email already taken");
}else{
	echo $e->getMessage();
}

*/

