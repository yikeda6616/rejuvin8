<?php

session_start();

include './function.php';
include './DB.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$pdo = DB::connect();
$sql = 'SELECT * FROM user WHERE email = ?';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) { // if the user related to the email doesn't exist
    header('location: login.php?error=true');
}

// verify user input password and hash stored in db
if (password_verify($password, $user['hash'])) {
    $_SESSION['user_id'] = $user['id'];
    header('location: ./message.php?success=true');
} else {
    header('location: ./index.php?error=true');
}
