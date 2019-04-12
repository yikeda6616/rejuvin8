<?php

include './function.php';
include './DB.php';

class User
{
    public static function check()
    {
        $pdo = DB::connect();
        $stmt = $pdo->prepare('SELECT * FROM user WHERE id = ?');
        $stmt->bindValue(1, $_SESSION['user_id']);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!isset($user['id']) || $_SESSION['user_id'] !== $user['id']) {
            header('location: index.php?error=true');
        }
    }
}
