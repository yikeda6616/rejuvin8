<?php

include './function.php';
include './DB.php';

// Validate
if ($_POST['name'] !== '') {
    $name = h($_POST['name']);
    $regex = "/[a-zA-z\s]{3,}/";
    preg_match($regex, $name) ? $valid_name = true : $valid_name = false;
}

if ($_POST['email'] !== '') {
    $email = h($_POST['email']);
    $regex = "/[a-zA-Z0-9.\-_]{1,}@{1}[a-zA-Z0-9]{3,}[.]{1}[a-zA-Z0-9]{1,}.{0,}/";
    preg_match($regex, $email) ? $valid_email = true : $valid_email = false;
}

// Insert to DB
$pdo = DB::connect();
$sql = 'INSERT INTO subscribe (`name`, `email`) VALUES (?, ?)';
$stmt = $pdo->prepare($sql); // Use prepared statement to prevent SQL injection
$stmt->bindValue(1, $name);
$stmt->bindValue(2, $email);

if ($valid_name && $valid_email) {
    $stmt->execute();
    header('location: ../index.html?success=true');
} else {
    header('location: ../index.html?error=true');
}