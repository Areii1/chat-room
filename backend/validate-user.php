<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
	require 'connect-to-db.php';

	$query = $handler->query("SELECT * FROM user WHERE username='$username'");
	$queryString = $query->fetch(PDO::FETCH_ASSOC);
	
	$dbpassword = $queryString['password'];

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


