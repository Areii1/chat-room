<?php
require 'connect-to-db.php';

$sender = $_POST['sender'];
$content = $_POST['message'];

$sql = 'INSERT INTO message (time, sender, content) VALUES (NOW(), ?, ?)';
$query = $handler->prepare($sql);

$query->execute([$sender, $content]);
?>