<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
	require 'connect-to-db.php';

	$query = $handler->query("SELECT * FROM user WHERE username='$username'");
	$queryString = json_encode(($query->fetchAll(PDO::FETCH_ASSOC)));
	echo $queryString;
}
else {
	die("Please enter a username and a password");
}

?>


