<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>chat-room</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<p>Say hello!</p>
	<div id="chat-area"></div>
	<?php 
	try {
		$handler = new PDO('mysql:host=127.0.0.1;dbname=chat-room', 'root', '');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}

	$query = $handler->query('SELECT * FROM message');
	$r = $query->fetch(PDO::FETCH_ASSOC);
	echo '<pre>', print_r($r), '</pre>';
	?>
	<form id="text-input">
		<input type="text" name="comment">
		<input type="submit" value="send">
	</form>
	<script src="main.js"></script>
</body>
</html>