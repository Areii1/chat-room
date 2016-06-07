<?php
require 'connect-to-db.php';

$query = $handler->query('SELECT * FROM message');
echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
?>