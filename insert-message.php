<?php
try {
	$handler = new PDO('mysql:host=localhost;dbname=chat-room', 'root', '');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

$time = '00:01:02';
$sender = 'DJ aksuli';
$content = $_POST['message'];

$sql = 'INSERT INTO message (time, sender, content) VALUES (?, ?, ?)';
$query = $handler->prepare($sql);

$query->execute([$time, $sender, $content]);
?>