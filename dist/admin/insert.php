<?php

include './function.php';
include './DB.php';

$pdo = DB::connect();
$sql = 'INSERT INTO subscribe (`name`, `email`) VALUES (?, ?)';
$stmt = $pdo->prepare($sql); // Use prepared statement to prevent SQL injection
$stmt->bindValue(1, h($_POST['name']));
$stmt->bindValue(2, h($_POST['email']));

$stmt->execute() ? header('location: ../index.html?success=true') : header('location: ../index.html?error=true');
