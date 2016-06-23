<?php
require 'connect-to-db.php';

$query = $handler->query('SELECT content, time, username FROM message INNER JOIN user ON message.sender_id=user.id');
echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
?>