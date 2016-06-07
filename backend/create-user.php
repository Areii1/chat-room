<?php

require 'connect-to-db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'INSERT INTO user (username, password) VALUES (?, ?)';
$query = $handler->prepare($sql);

$query->execute([$username, $password]);

header('Location: ../login.html');
die();
?>