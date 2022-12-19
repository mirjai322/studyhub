<?php
$mysqli = require __DIR__ . "/database.php"; //connect with database
$sql = sprintf("SELECT * FROM user
				WHERE email = '%s'",
				$mysqli->real_escape_string($_GET["email"]));
$result = $mysqli->query($sql);
$is_available = $result->num_rows === 0;
header("Content-Type: application/json"); //request made as javascript, output as json
echo json_encode(["available" => $is_available]);