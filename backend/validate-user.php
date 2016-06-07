<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
	require 'connect-to-db.php';

	$sql = "SELECT * FROM user WHERE username=? AND password=?";
	$query = $handler->prepare($sql);

	$query->execute([$username, $password]);

	$isUserFound = $query->fetch(PDO::FETCH_ASSOC);

	if ($isUserFound) {
		echo 'success';
        $_SESSION['username'] = $username;

        header("Location: ../index.php");
        die();
	}
	else {
		echo 'failure';
		header('Location: ../login.html');
		die();
	}
}
else {
	die("Please enter a username and a password");
}

?>