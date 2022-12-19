<?php
//sessions are used to remember values between browser requests. php handles this automatically by generating a session ID in a browser cookie that is used to uniquely identify the user
session_start();
if(isset($_SESSION["user_id"])){
	//retrieve information from database that corresponds to this user id
	$mysqli = require __DIR__ . "/database.php";
	$sql = "SELECT * FROM user
			WHERE id = {$_SESSION["user_id"]}";
	$result = $mysqli->query($sql);
	$user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <style>
  	background-color: #ffd9d9;
  	color: #fffafa;
  </style>
</head>
<body>
	<h1>Home</h1>
	<?php if(isset($user)): ?>
		<p>Hello <?= htmlspecialchars($user["name"])?></p>
		<p><a href="logout.php">Log out</a></p>
	<?php else: ?>
		<p><a href="login.php">Log In</a> or <a href="signup.html">Sign up</a></p>
	<?php endif; ?>
</body>
</html>