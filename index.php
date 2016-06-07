<?php
session_start();

if (!$_SESSION['username']) {
	header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>chat-room</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<nav>
		<a href="login.html">Login</a>
		<a href="register.html">Register</a>
		<a href="backend/logout.php">Logout</a>
	</nav>
	<div id="wrapper">
		<div id="sender-wrapper">
			<input type="text" id="sender" placeholder="Who are you?">
		</div>
		<ul id="chat-area"></ul>
		<form id="message-form">
			<input type="text" id="message" placeholder="Say hello!" autocomplete="off">
			<input type="submit" value="send" id="send-button">
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>