<?php

include './function.php';
include './DB.php';

class User
{
    public static function check($user_id)
    {
        $pdo = DB::connect();
        $sql = 'SELECT * FROM user WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $_SESSION['user_id']);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($user);
        if (!isset($result['id'])) {
            header('location: index.php?error=true');
        }
    }
}
