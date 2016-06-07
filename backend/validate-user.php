<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
	require 'connect-to-db.php';

	$sql = "SELECT * FROM user WHERE username=?";
	$query = $handler->prepare($sql);

	$query->execute([$username]);
	$result = $query->fetch(PDO::FETCH_ASSOC);

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


