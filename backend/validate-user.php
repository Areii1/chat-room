<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
	require 'connect-to-db.php';

	$query = $handler->query("SELECT * FROM user WHERE username='$username'");
	$queryString = json_encode(($query->fetch(PDO::FETCH_ASSOC)));

	$result = json_decode($queryString, true);
	$dbpassword = $result['password'];

	if ($dbpassword == $password) {
		echo 'success';
	}
	else {
		echo 'failure';
	}
}
else {
	die("Please enter a username and a password");
}

?>


