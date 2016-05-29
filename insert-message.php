<?php
try {
	$handler = new PDO('mysql:host=localhost;dbname=chat-room', 'root', '');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

$sender = $_POST['sender'];
$content = $_POST['message'];

$sql = 'INSERT INTO message (time, sender, content) VALUES (NOW(), ?, ?)';
$query = $handler->prepare($sql);

$query->execute([$sender, $content]);
?>