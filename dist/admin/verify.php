<?php

session_start();

include './DB.php';
$pdo = DB::connect();

$post_email = $_POST['email'];

$sql = 'SELECT * FROM user WHERE email = :email';
$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => $post_email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo'erorr';
    // header('location: login.php?error=true');
}

if (password_verify($_POST['password'], $user['hash'])) {
    $_SESSION['login'] = true;
    header('location: ./message.php?success=true');
} else {
    header('location: ./login.php?error=true');
}
