<?php

include './DB.php';

class Subscribe
{
    public $valid_name;
    public $valid_email;

    public function validateName($post_name)
    {
        if ($post_name !== '') {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $regex = "/[a-zA-z\s]{3,}/";
            preg_match($regex, $name) ? $this->valid_name = true : $this->valid_name = false;
        }

        return $this->valid_name;
    }

    public function validateEmail($post_email)
    {
        if ($post_email !== '') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $regex = "/[a-zA-Z0-9.\-_]{1,}@{1}[a-zA-Z0-9]{3,}[.]{1}[a-zA-Z0-9]{1,}.{0,}/";
            preg_match($regex, $email) ? $this->valid_email = true : $this->valid_email = false;
        }

        return $this->valid_email;
    }

    public function add($name, $email)
    {
        // Insert to DB
        $pdo = DB::connect();
        $stmt = $pdo->prepare('INSERT INTO subscribe (`name`, `email`) VALUES (?, ?)');
        $stmt->bindValue(1, $name);
        $stmt->bindValue(2, $email);

        if ($this->valid_name && $this->valid_email) {
            $stmt->execute();
            header('location: ../index.html?success=true');
        } else {
            header('location: ../index.html?error=true');
        }
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
