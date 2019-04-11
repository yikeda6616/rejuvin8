<?php

session_start();

include './function.php';
include './DB.php';

$pdo = DB::connect();
$sql = 'SELECT * FROM user WHERE email = ?';
$stmt = $pdo->prepare($sql); // Use prepared statement to prevent SQL injection
$stmt->bindValue(1, h($_POST['email']));
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo'error';
    // header('location: login.php?error=true');
}

if (password_verify(h($_POST['password']), $user['hash'])) {
    $_SESSION['login'] = true;
    header('location: ./message.php?success=true');
} else {
    header('location: ./index.php?error=true');
}
