<?php

include './function.php';
include './Subscribe.php';

// Sanitize user input
$name = Subscribe::sanitizeName($_POST['name']);
$email = Subscribe::sanitizeEmail($_POST['email']);

// Validate user input
$valid_name = Subscribe::validateName($name);
$valid_email = Subscribe::validateEmail($email);

// Add to DB
($valid_name && $valid_email) ?
    Subscribe::add($name, $email) :
    header('location: ./index.php?error=true'); // TODO: Check header location before deploy
