<?php

include './DB.php';

class Subscribe
{
    public static function sanitizeName($post_name)
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        return $name;
    }

    public static function sanitizeEmail($post_email)
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        return $email;
    }

    public static function validateName($name)
    {
        $valid_name;

        if ($name !== '') {
            $regex = "/[a-zA-z\s]{3,}/";
            preg_match($regex, $name) ? $valid_name = true : $valid_name = false;
        }

        return $valid_name;
    }

    public static function validateEmail($email)
    {
        $valid_email;

        if ($post_email !== '') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $regex = "/[a-zA-Z0-9.\-_]{1,}@{1}[a-zA-Z0-9]{3,}[.]{1}[a-zA-Z0-9]{1,}.{0,}/";
            preg_match($regex, $email) ? $valid_email = true : $valid_email = false;
        }

        return $valid_email;
    }

    public static function add($name, $email)
    {
        // Insert to DB
        $pdo = DB::connect();
        $stmt = $pdo->prepare('INSERT INTO subscribe (`name`, `email`) VALUES (?, ?)');
        $stmt->bindValue(1, $name);
        $stmt->bindValue(2, $email);
        ($stmt->execute()) ?
            header('location: ../index.html?success=true') :
            header('location: ../index.html?error=true');
    }

    public static function delete($id)
    {
        $pdo = DB::connect();
        $stmt = $pdo->prepare('DELETE FROM subscribe WHERE id = ?');
        $stmt->bindValue(1, $id);
        ($stmt->execute()) ?
          header('location: ./message.php?success=true') :
          header('location: ./message.php?error=ture');
    }
}
