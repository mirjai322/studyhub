<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
	$mysqli = require __DIR__ . "/database.php";
	$sql = sprintf("SELECT * FROM user
					WHERE email = '%s'",
					$mysqli->real_escape_string($_POST["email"])); //any column used in a where clause should have an index (email column in this case)
	//we are avoiding SQL injection attack using real escape string method
	$result = $mysqli->query($sql); //use query method --> returns an object --> set it equal to variable result

	$user = $result->fetch_assoc(); //will return the record if one was found as an associative array, assign it to user variable

	if($user){
		if(password_verify($_POST["password"], $user["password_hash"])){
			session_start();
			session_regenerate_id();
			$_SESSION["user_id"] = $user["id"]; //these values are, by default, stored in files on the server
			header("Location: home.php"); //direct to index page
			exit; //exit script
		}
	}

	$is_invalid = true;



}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
	<h1>Login</h1>

	<?php if($is_invalid): ?><!--server side validation, to confirm if input on login form is in database-->
		<em>Invalid login</em>
	<?php endif; ?>

	<form method="post">
		<label for="email">Email</label><!--email section-->
		<input type="email" name="email" id="email">

		<label for="password">Password</label><!--password section-->
		<input type="password" name="password" id="password">

		<button>Log In</button>
	</form>
</body>
</html>