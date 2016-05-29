<?php 
try {
	$handler = new PDO('mysql:host=localhost;dbname=chat-room', 'root', '');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

$query = $handler->query('SELECT * FROM message');
echo json_encode(($query->fetchAll(PDO::FETCH_ASSOC)));
?>